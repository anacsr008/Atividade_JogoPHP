<?php


namespace App\Http\Classes\RPG;

// herda da classe abstrata Personagens
class Mares extends Personagens {
    protected int $tentaculos;
    protected string $ambiente;

    public function __construct() {
        // Atributos da classe Personagens
        parent::__construct("Mares", 300, 20); 
        $this->tentaculos = 8;
        $this->ambiente = "Profundezas Oceânicas";
    }

    public function getTentaculos(): int {
        return $this->tentaculos;
    }

    public function getAmbiente(): string {
        return $this->ambiente;
    }

    // Implementa o método abstrato atacar()
    public function atacar(): string {
        $danoTentaculo = $this->forca + mt_rand(10, 30); // Dano massivo
        return "O Mares ataca com seus enormes tentáculos! Causa $danoTentaculo de dano de concussão. O alvo está Agarrado.";
    }

    //Habilidade  Liberação de Tinta
    public function liberarTinta(): string {
        return "O Mares libera uma nuvem de tinta escura. Todos os ataques contra ele têm desvantagem no próximo turno.";
    }

    //Método receberDano para uma resistência natural
    public function receberDano(int $dano): string {
        $danoReduzido = (int)($dano * 0.85); 
        $mensagemBase = parent::receberDano($danoReduzido);
        return "A pele grossa do Marse absorve parte do impacto. O dano foi reduzido." . $mensagemBase;
    }
}