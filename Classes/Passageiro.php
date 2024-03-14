<?php

class Passageiro
{
    private string $nome;
    private int $contato;
    private int $numeroPassagem;
    private int $passaporte;
    private bool $checkin;

    public function __construct($nome, $contato, $numeroPassagem, $passaporte, $checkin) 
    {
        $this->nome = $nome;
        $this->contato = $contato;
        $this->numeroPassagem = $numeroPassagem;
        $this->passaporte = $passaporte;
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
    public function getPassaporte(): int
    {
        return $this->passaporte;
    }
    public function getCheckin(): bool
    {
        if ($this->checkin == true){
            return 'SIM';
        } else{
            return 'NÃO';
        }
    }

}

