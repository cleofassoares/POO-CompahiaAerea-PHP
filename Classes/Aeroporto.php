<?php

class Aeroporto
{
    private string $nome;
    private string $endereco;
    private string $statusPista;
    

    public function __construct($nome, $endereco, $statusPista)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->statusPista = $statusPista;
        
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

}       