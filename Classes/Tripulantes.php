<?php
class Tripulantes
{
    public string $nome;
    public string $cargo;
    public string $licenca;

    public function __construct($nome, $cargo, $licenca) {
        $this->nome = $nome;
        $this ->cargo = $cargo;
        $this->licenca = $licenca;
    }

    public function getNome(): String
    {
        return $this->nome;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getLicenca(): string
    {
        return $this->licenca;
    }
}

