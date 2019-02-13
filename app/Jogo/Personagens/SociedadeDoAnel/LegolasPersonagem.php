<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class LegolasPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(5);
        $this->setDestreza(9);
        $this->setMagia(4);
        $this->setNome('Legolas');
    }
}