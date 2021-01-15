<?php


namespace App\Models;

final class CarroModel
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
    private $alugado;
    /**
     * @var string
     */
    private $valor;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): CarroModel
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
     * @return CarroModel
     */
    public function setNome(string $nome): CarroModel
    {
        $this->nome = $nome;
        return $this;
    }



    /**
     * @return bool
     */
    public function getAlugado(): bool
    {
        return $this->alugado;
    }
    /**
     * @param bool $alugado
     * @return CarroModel
     */
    public function setAlugado(bool $alugado): CarroModel
    {
        $this->alugado = $alugado;
        return $this;
    }



    /**
     * @return string
     */
    public function getValor(): string
    {
        return $this->valor;
    }
    /**
     * @param string $valor
     * @return CarroModel
     */
    public function setValor(string $valor): CarroModel
    {
        $this->valor = $valor;
        return $this;
    }
}