<?php
class Pessoa
{
    private string $nome;
    private int $idade;
    private string $cpf;
    private string $sexo;

    public function __construct(string $nome, int $idade, string $cpf, string $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getSexo(): string
    {
        return $this->sexo;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }
}
