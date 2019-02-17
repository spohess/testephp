<?php

namespace App\Jogo\Personagens\ExercitoMordor;

use App\Jogo\Personagens\AbstractPersonagem;


final class OlhoDeSauronPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(100);
        $this->setDestreza(100);
        $this->setMagia(1000);
        $this->setNome('Olho de Sauron');
    }
}