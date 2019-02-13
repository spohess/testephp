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

    protected function aumentaHabilidades(PersonagemInterface $personagem): void
    {

        $this->arma->aumentaForca($personagem);
        $this->arma->aumentaDestreza($personagem);
        $this->arma->aumentaMagia($personagem);
    }
}