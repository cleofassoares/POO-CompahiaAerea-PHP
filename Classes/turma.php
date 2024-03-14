<?php
class Turma 
{
    private $nome;
    private $alunos = [];
    private $professor;

    public function __construct(string $nome, array $alunos, string $professor)
    {
        $this->nome = $nome;
        $this->alunos = $alunos;
        $this->professor = $professor;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }
    
    public function getProfessor(): string
    {
        return $this->professor;
    }

    public function setProfessor(string $professor): void
    {
        $this->professor = $professor;
    }

    public function realizarProjeto(string $tema): string
    {
        return "A turma {$this->getNome()} está realizando um projeto sobre o tema '{$tema}'.";
    }

    public function apresentarRelatorio(): string
    {
        return "A turma {$this->getNome()} está apresentando seu relatório final.";
    }

    private function validarIdade(int $idadeAluno): bool
    {
        $idadeMinima = 18; // Idade mínima necessária para ingressar no curso
        return $idadeAluno >= $idadeMinima;
    }

    public function validarMatrícula(int $idadeAluno): bool
    {
     
        $idadeValida = $this->validarIdade($idadeAluno);

        if ($idadeValida) {
            echo "Matrícula validada. O aluno atende à idade mínima necessária.\n";
            return true;
        } else {
            echo "Matrícula não validada. O aluno não atende à idade mínima necessária.\n";
            return false;
        }
    }
}

