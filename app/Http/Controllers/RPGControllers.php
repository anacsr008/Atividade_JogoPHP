<?php

namespace app\Http\Controllers;

use Iluminate\Http\Request;

//importação essencial

use App\Http\Classes\RPG\Jogador;
use App\Http\Classes\RPG\Arma;
use App\Http\Classes\RPG\Monstro;
use App\Http\Controllers\Controller;

class RPGControllers extends Controller {

public function simuladorCombate(): View
{

    //Criação dos objetos (instanciação de Classes)
    $heroi = new Jogador ('Gandalf', 200, 30);
    $espada = new Arma (nome:'Espada de esmeralda', peso: 5.0, danoAdicional:50);
    $Mares = new Monstro ('Mares', 60, 10, 'Mares', 25);

    //Manipulação de objetos e uso de métodos
    $heroi -> equiparItem($espada);
    $resultado = $heroi -> atacar();
    $dano_monstro = 80; //Exemplo de Dano
    $resultado_dano = $Mares -> receberDano ($dano_monstro);
    $solta_item = $Mares -> soltarItem ();

    //Retorno para usuário
    return view(view: 'combate', data:[
        'heroi_nome' => $heroi->getNome(),
        'status_ataque' => $resultado,
        'status_Mares' => $resultado_dano,
        'status_loot' => $solta_item
     ]);
}



}