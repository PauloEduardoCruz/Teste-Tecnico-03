<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\DAO\MySQL\LocadoraDAO;
use App\Models\CarroModel;
use App\Models\ClienteModel;

require_once './App/Models/CarroModel.php';
require_once './App/Models/ClienteModel.php';



final class LocadoraController 
{
    public function getCarros(Request $request, Response $response, array $args): Response
    {
        $locadoraDAO = new LocadoraDAO();
        $locadora = $locadoraDAO->getAllCarros();
        $response = $response->withJson($locadora);
        return $response;
    }



    public function insertCarro(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $locadoraDAO = new LocadoraDAO();
        $carro = new carroModel();
        $carro->setNome($data['nome'] ?? '')
            ->setAlugado(0)
            ->setValor($data['valor'] ?? '');
        $locadoraDAO->insertCarro($carro);

        $response = $response->withJson([
            'menssage' => 'Carro inserido com sucesso!'
        ]);
        return $response;
    }



    public function updateCarro(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $locadoraDAO = new LocadoraDAO();
        $carro = new carroModel();
        $carro->setId((int)$data['id'])
            ->setNome($data['nome'])
            ->setValor($data['valor'])
            ->setAlugado(0);
        $locadoraDAO->updateCarro($carro);

        $response = $response->withJson([
            'message' => 'Carro alterado com sucesso!'
        ]);
        return $response;
    }



    public function alugarCarro(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getParsedBody();
        $locadoraDAO = new LocadoraDAO();
        $id = (int)$queryParams['id'];
        $alugado = 1;
        $locadoraDAO->alugarCarro($id, $alugado);

        //dados do cliente
        $data = $request->getParsedBody();
        $locadoraDAO = new LocadoraDAO();
        $cliente = new ClienteModel();
        $cliente->setNome($data['nome'] ?? '')
            ->setTelefone($data['telefone'] ?? '');
        $locadoraDAO->insertCliente($cliente);

        $response = $response->withJson([
            'message' => 'Carro alugado com sucesso!'
        ]);
        return $response;
    }



    public function devolverCarro(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getParsedBody();
        $locadoraDAO = new LocadoraDAO();
        $id = (int)$queryParams['id'];
        $alugado = 0;
        $locadoraDAO->devolverCarro($id, $alugado);

        $response = $response->withJson([
            'message' => 'Carro devolvido com sucesso!'
        ]);
        return $response;
    }



    public function deleteCarro(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getParsedBody();
        $locadoraDAO = new LocadoraDAO();
        $id = (int)$queryParams['id'];
        $locadoraDAO->deleteCarro($id);

        $response = $response->withJson([
            'message' => 'Carro removido com sucesso!'
        ]);
        return $response;
    }
}