<?php

declare(strict_types=1);

class Professor {
    public function __construct(private string $nome, private string $cpf, private float $salario)
    {
        if ($salario < 0) {
            die('Ops, salário não pode ser negativo!');
        }
    }
}