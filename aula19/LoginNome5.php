<?php

declare (strict_types=1);

class LoginNome5 implements Login5 {
    public function loginUsuario(string $nome, string $senha): void {
        if (strlen($nome) < 2 or strlen($senha) < 6) {
            die ('Login inválido!');
        } else {
            echo "Login efetuado com sucesso!";
        }
    }
}