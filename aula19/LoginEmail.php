<?php

declare (strict_types=1);

class LoginEmail5 implements Login5 {
    public function loginUsuario(string $email, string $senha): void {
        if (strlen($email) < 2 or strlen($senha) < 6) {
            die ('Login inválido!');
        } else {
            echo "Login efetuado com sucesso!";
        }
    }
}