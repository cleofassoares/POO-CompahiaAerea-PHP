<?php

class Passageiro
{
    private string $nome;
    private string $contato;
    private string $numeroPassagem;
    private string $passaporte;
    private bool $checkin;

    public function __construct($nome, $contato, $numeroPassagem, $passaporte, $checkin) 
    {
        $this->nome = $nome;
        $this->contato = $contato;
        $this->numeroPassagem = $numeroPassagem;
        $this->passaporte = $passaporte;
        $this->checkin = $checkin;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getContato(): string
    {
        return $this->contato;
    }

    public function getNumeroPassagem(): string
    {
        return $this->numeroPassagem;
    }
    public function getPassaporte(): string
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

