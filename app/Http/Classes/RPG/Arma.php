<?php

namespace App\Http\Classes\RPG;

use App\Http\classes\RPG\Item;

class Espada extends Item {
    protected int $danoElemental;
    protected string $origem;

    public function __construct() {
        parent::__construct(
            "Espada de esmeralda",
            "Uma espada longa feita de esmeralda verde água, imbuída com o poder dos mares."
        );
        $this->danoElemental = 6; 
        $this->origem = "Divindade Marítima";
    }

    public function getDanoElemental(): int {
        return $this->danoElemental;
    }

    // Implementa o método abstrato usar na classe Itens
    public function usar(): string {
        return "A espada de esmeralda é brandida. Além do dano base (Força), ela adiciona $this->danoElemental de dano de Gelo/Água. Em combate, ela pode invocar uma Onda Repulsora (CD 15 de Força).";
    }

    // Habilidade de Combate Específica
    public function invocarOnda(): string {
        return "A espada solta uma onda de água mágica. O alvo deve passar em um Teste de Força (CD 15) ou ser empurrado 3 metros.";
    }
}