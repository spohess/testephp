<?php

namespace App\Jogo\Personagens;

use App\Jogo\Armas\ArmaInterface;
use App\Jogo\Armas\TraitArmado;
use App\Jogo\TemHabilidade;


abstract class AbstractPersonagem implements PersonagemInterface
{

    use TemHabilidade, TraitArmado;


    public function aumentaHabilidades(): void
    {

        $this->arma->aumentaForca($this);
        $this->arma->aumentaDestreza($this);
        $this->arma->aumentaMagia($this);
    }
}