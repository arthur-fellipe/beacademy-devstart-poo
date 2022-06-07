<?php

declare (strict_types=1);

class Cliente3 extends Usuario3 {
    private string $dataCadastro;
    
    public function getDataCadastro(): string 
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }
}