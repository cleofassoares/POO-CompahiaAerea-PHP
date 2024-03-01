<?php

class Checkin
{
    private string $nome;
    private int $numeroPassagem;
    private int $passaporte;
    private bool $despacharBagagem;

    public function __construct($nome, $numeroPassagem, $passaporte, $despacharBagagem)
    {
        $this->nome = $nome;
        $this->numeroPassagem = $numeroPassagem;
        $this->passaporte = $passaporte;
        $this->despacharBagagem = $despacharBagagem;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getNumeroPassagem() : string
    {
        return $this->numeroPassagem;
    }

    public function getPassaporte() : string
    {
        return $this->passaporte;
    }
    public function getDespacharBagagem() : string
    {
        return $this->despacharBagagem;
    }

}