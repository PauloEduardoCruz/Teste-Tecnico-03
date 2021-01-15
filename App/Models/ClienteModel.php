<?php


namespace App\Models;

final class ClienteModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $telefone;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): ClienteModel
    {
        $this->id = $id;
        return $this;
    }



    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
    /**
     * @param string $nome
     * @return ClienteModel
     */
    public function setNome(string $nome): ClienteModel
    {
        $this->nome = $nome;
        return $this;
    }



    /**
     * @return string
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }
    /**
     * @param string $telefone
     * @return ClienteModel
     */
    public function setTelefone(string $telefone): ClienteModel
    {
        $this->telefone = $telefone;
        return $this;
    }
}