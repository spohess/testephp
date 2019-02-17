<?php

namespace App\Jogo\Personagens\ExercitoMordor;

use App\Jogo\Personagens\AbstractPersonagem;


final class UrukHaiPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(10);
        $this->setDestreza(7);
        $this->setMagia(0);
        $this->setNome('Uruk-Hai');
    }
}