$<?php

class Passagem
{
    private string $nome;
    private string $endereco;
    private string $dia;
    private string $cpf;
    private string $hora;
    public function __construct($nome, $endereco,$dia,$hora,$cpf )
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->dia= $dia;
        $this->hora= $hora;
        $this->cpf= $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function getDia(): string
    {
        return $this->dia;
    }
    public function getHora(): string
    {
        return $this->hora;
    }
    public function getEndereco(): string
    {
        return $this->endereco;
    }
}    
