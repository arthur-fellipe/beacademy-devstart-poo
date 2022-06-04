<?php

declare(strict_types=1);

class Curso {
    private int $cargaHoraria;
    private string $nome;
    private string $descricao;

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

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao): void {
        $this->descricao = $novaDescricao;
    }
}