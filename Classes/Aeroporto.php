<?php

class Aeroporto
{
    private string $nome;
    private string $endereco;
    private string $statusPista;
    private Cidade $cidade;

    public function __construct($nome, $endereco, $statusPista, $cidade)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->statusPista = $statusPista;
        $this->cidade = $cidade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getStatusPista(): string
    {
        if($this->statusPista == 'DISPONIVEL') {
            return 'PISTA DISPONIVEL';
        } else {
            return 'PISTA INDISPONIVEL';
        }
    }

    public function getCidade($Cidade){
        return $this->$Cidade;
    }

}