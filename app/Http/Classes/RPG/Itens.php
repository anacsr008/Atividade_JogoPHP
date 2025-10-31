<?php

namespace App\Http\classes\RPG;

class Item {
    private string $nome_item;
    private float $peso;

    public function __construct(string $nome_item, float $peso) {
        $this->nome_item = $nome_item;
        $this->peso = $peso;   
    }

    public function usar(): string {
        return "Você usou o item: " . $this->nome_item;
    }
   
    public function getNome(): string {
        return $this->nome_item;
    }

    public function getPeso(): float {
        return $this->peso;
    }
}



