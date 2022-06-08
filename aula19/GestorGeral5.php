<?php

declare (strict_types=1);

class GestorGeral5 extends Gestor5 {
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