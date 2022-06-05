<?php

declare(strict_types=1);

class Disciplina {
    public function __construct(private string $nome, private object $professor, private int $cargaHoraria)
    {
        if ($cargaHoraria < 0) {
            die('Ops, carga horária não pode ser negativa!');
        }
    }
}