<?php

declare (strict_types=1);

class Cliente2 extends Usuario2 {
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