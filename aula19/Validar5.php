<?php

declare (strict_types=1);

class Validar5 {
    public static function validarCpf(string $cpf): void{
        if (strlen($cpf) !== 11) {
            die ('CPF inválido!');
        }
    }
}