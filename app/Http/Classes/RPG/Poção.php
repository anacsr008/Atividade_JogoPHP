<?php

namespace App\Http\Classes\RPG;

class LagrimaDeTetis extends Item {
    protected int $curaBase;
    protected string $elemento;

    public function __construct() {
        parent::__construct(
            "Serpentes de sereias",
            "Uma poção feita de escamas pura de uma sereia do mar, que cura ferimentos rapidamente."
        );
        $this->curaBase = 4; 
        $this->elemento = "Água";
    }

    public function getCuraBase(): int {
        return $this->curaBase;
    }

    public function usar(): string {
        $curaTotal = mt_rand(1, $this->curaBase) + mt_rand(1, $this->curaBase) + mt_rand(1, $this->curaBase) + mt_rand(1, $this->curaBase);
        return "Você bebe serpentes de sereia. A escama brilhosa e acalma suas feridas e recupera $curaTotal pontos de vida. Você também ganha resistência a dano de Fogo por 1 turno.";
    }
}