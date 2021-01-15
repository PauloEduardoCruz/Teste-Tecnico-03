<?php

namespace App\DAO\MySQL;
use App\Models\CarroModel;
use App\Models\ClienteModel;


class LocadoraDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }



    public function getAllCarros(): array
    {
        $carros = $this->pdo
            ->query('SELECT
            id,
            nome,

            valor
            FROM carros WHERE alugado = 0;')
            ->fetchAll(\PDO::FETCH_ASSOC);
        return $carros;
    }



    public function insertCarro(CarroModel $carro): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO carros VALUES(
                null,
                :nome,
                :alugado,
                :valor
            );');
        $statement->execute([
            'nome' => $carro->getNome(),
            'alugado' => $carro->getAlugado(),
            'valor' => $carro->getValor()
        ]);
    }



    public function insertCliente(ClienteModel $cliente): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO clientes VALUES(
                null,
                :nome,
                :telefone
            );');
        $statement->execute([
            'nome' => $cliente->getNome(),
            'telefone' => $cliente->getTelefone()
        ]);
    }



    public function updateCarro(carroModel $carro): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE carros SET
                    nome = :nome,
                    alugado = :alugado,
                    valor = :valor
                WHERE
                    id = :id
            ;');
        $statement->execute([
            'nome' => $carro->getNome(),
            'alugado' => $carro->getAlugado(),
            'valor' => $carro->getValor(),
            'id' => $carro->getId()
        ]);
    }



    public function alugarCarro(int $id, bool $alugado): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE carros SET 
                alugado = :alugado
             WHERE id = :id;');
        $statement->execute([
            'id' => $id,
            'alugado' => $alugado
        ]);
    }




    public function devolverCarro(int $id, bool $alugado): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE carros SET 
                alugado = :alugado
             WHERE id = :id;');
        $statement->execute([
            'id' => $id,
            'alugado' => $alugado
        ]);
    }



    public function deleteCarro(int $id): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM carros WHERE id = :id;');
        $statement->execute([
            'id' => $id
        ]);
    }
}
