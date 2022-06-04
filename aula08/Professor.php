<?php

declare(strict_types=1);

class Professor {
    private string $nome;
    private float $salario;
    private string $cpf;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $novoNome): void {
        $this->nome = $novoNome;
    }    
    
    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $novoSalario): void {
        if ($novoSalario < 0) {
            die('Ops, salário não pode ser negativo!');
        }
        
        $this->salario = $novoSalario;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $novoCpf): void {
        $this->cpf = $novoCpf;
    }
}