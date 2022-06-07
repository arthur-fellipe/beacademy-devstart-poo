<?php

declare (strict_types=1);

class GestorGeral4 extends Gestor4 {
    private float $bonusAnual;

    public function getBonusAnual(): float 
    {
        return $this->bonusAnual;
    }

    public function setBonusAnual(float $bonusAnual)
    {
        $this->bonusAnual = $bonusAnual;

        return $this;
    }
}