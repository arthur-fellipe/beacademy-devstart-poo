<?php

declare(strict_types=1);

class Disciplina {
    private int $cargaHoraria;
    private string $nome;
    private object $professor;

    public function getCargaHoraria(): int {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(int $novaCargaHoraria): void {
        if ($novaCargaHoraria < 0) {
            die('Ops, carga horária não pode ser negativa!');
        }
        
        $this->cargaHoraria = $novaCargaHoraria;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $novoNome): void {
        $this->nome = $novoNome;
    }

    public function getProfessor(): object {
        return $this->professor;
    }

    public function setProfessor(object $novoProfessor): void {
        $this->professor = $novoProfessor;
    }
}