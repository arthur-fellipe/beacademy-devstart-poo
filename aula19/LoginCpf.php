<?php

declare (strict_types=1);

class LoginNome5 implements Login5 {
    public function loginUsuario(string $cpf, string $senha): void {
        if (strlen($cpf) !== 11 or strlen($senha) < 6) {
            die ('Login inválido!');
        } else {
            echo "Login efetuado com sucesso!";
        }
    }
}