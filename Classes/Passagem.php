<?php

class Passagem
{   
    private Passageiro $passageiro;
    private string $dia;
    private string $hora;

    public function __construct($passageiro,$dia,$hora)
    {   
        $this->passageiro = $passageiro;
        $this->dia= $dia;
        $this->hora= $hora;
    }

    public function getDia(): string
    {
        return $this->dia;
    }
    public function getHora(): string
    {
        return $this->hora;
    }
    public function getPassageiro(): Passageiro
    {
        return $this->passageiro;
    }
}    
