<?php

declare (strict_types=1);

class Usuario3 {
    private string $nome;   
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }
    
    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
        
        return $this;
    }

    public function getEmail(): string 
    {
        return $this->email;
    } 

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha(): string 
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    } 

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}