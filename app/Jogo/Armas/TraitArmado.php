<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


trait TraitArmado
{

    public $arma;


    public function setArma(ArmaInterface $arma): void
    {

        $this->arma = $arma;
    }
}