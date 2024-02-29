<?php

class Passageiro
{
    private string $nome;
    private int $contato;
    private int $numeroPassagem;

    public function __construct($nome, $contato, $numeroPassagem) 
    {
        $this->nome = $nome;
        $this->contato = $contato;
        $this->numeroPassagem = $numeroPassagem;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getContato(): int
    {
        return $this->contato;
    }

    public function getNumeroPassagem(): int
    {
        return $this->numeroPassagem;
    }

}

