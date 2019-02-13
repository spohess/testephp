<?php

namespace App\Jogo\Personagens;

use App\Jogo\Armas\TraitArmado;
use App\Jogo\TemHabilidade;


abstract class AbstractPersonagem implements PersonagemInterface
{

    use TemHabilidade, TraitArmado;

}