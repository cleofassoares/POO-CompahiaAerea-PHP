<?php

require_once "Pessoa.php";

class Tripulantes extends Pessoa
{
    public string $cargo;
    public string $licenca;

    public function __construct($nome, $cargo, $licenca, $idade, $cpf, $sexo) {
        $this ->cargo = $cargo;
        $this->licenca = $licenca;
        parent:: __construct($nome, $idade, $cpf, $sexo);
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

