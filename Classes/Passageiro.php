<?php

require_once "Pessoa.php";

class Passageiro extends Pessoa
{
    private string $contato;
    private string $numeroPassagem;
    private string $passaporte;
    private bool $checkin;

    public function __construct($nome, $idade, $cpf, $sexo, $contato, $numeroPassagem, $passaporte, $checkin) 
    {
        $this->contato = $contato;
        $this->numeroPassagem = $numeroPassagem;
        $this->passaporte = $passaporte;
        $this->checkin = $checkin;
        parent::__construct($nome, $idade, $cpf, $sexo);
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
    public function getCheckin(): string
    {
        if ($this->checkin == true){
            return 'SIM';
        } else{
            return 'NÃO';
        }
    }

}

