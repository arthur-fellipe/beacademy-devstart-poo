<?php

declare (strict_types=1);

class Gestor5 extends Usuario5 {
    private float $salario;
    private string $horario;

    public function __construct(string $email, string $senha, float $salario)
    {
        parent::setEmail($email);
        parent::setSenha($senha);
        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getHorario(): string 
    {
        return $this->horario;
    }

    public function setHorario(string $horario)
    {
        $this->horario = $horario;

        return $this;
    }
    
}