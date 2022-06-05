<?php

declare(strict_types=1);

class Professor {
    public function __construct(private string $nome, private string $cpf, private float $salario)
    {
        if ($salario < 0) {
            die('Ops, salário não pode ser negativo!');
        }
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }    
    
    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {        
        $this->salario = $salario;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }
}