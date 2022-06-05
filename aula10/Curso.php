<?php

declare(strict_types=1);

class Curso {
    public function __construct(private string $nome, private string $descricao, private int $cargaHoraria)
    {
        if ($cargaHoraria < 0) {
            die('Ops, carga horária não pode ser negativa!');
        }
    }
}