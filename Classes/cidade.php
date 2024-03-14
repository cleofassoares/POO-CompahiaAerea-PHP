<?php

class Cidade
{
    private string $nome;
    private string $estado;

    public function __construct($nome, $estado)
    {
        $this-> nome = $nome;
        $this-> estado = $estado;
    }

    public function getNome() : string
    {
        return $this->nome;
    }
    public function getEstado() : string
    {
        return $this->estado;
    }

}