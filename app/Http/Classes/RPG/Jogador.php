<?php

namespace App\Http\Classes\RPG;

use Http\Classes\RPG\Personagem;

class Jogador extends Personagens {

    private int $experiencia;

    public function __construct(string $nome, int $vida, int $atacar){

        parent::__construct( $nome,$vida,$atacar);
        $this->experiencia = 0;

    }

    public function atacar ():string{

        $dano = $this->atacar()*2;
        return "{this->nome} atacou e causou {$dano} de dano.";

    }

    public function ganharExperiencia (int $experiencia): string {

        $this->experiencia += $experiencia;
        return "{this->nome} ganhou {$experiencia} de experiencia.";

    }
}