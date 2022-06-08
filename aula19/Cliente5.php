<?php

declare (strict_types=1);

final class Cliente5 extends Usuario5 {
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