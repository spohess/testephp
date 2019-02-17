<?php

namespace App\Jogo\Personagens\ExercitoMordor;

use App\Jogo\Personagens\AbstractPersonagem;


final class SnagaPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(4);
        $this->setDestreza(6);
        $this->setMagia(0);
        $this->setNome('Snaga');
    }
}