<?php

declare(strict_types=1);

class Curso {
    public function __construct(private string $nome, private string $descricao, private int $cargaHoraria)
    {
        if ($cargaHoraria < 0) {
            die('Ops, carga horária não pode ser negativa!');
        }
    }

    public function getCargaHoraria(): int {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(int $cargaHoraria): void {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }
}