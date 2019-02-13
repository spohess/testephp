<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class AragornPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(8);
        $this->setDestreza(5);
        $this->setMagia(1);
        $this->setNome('Aragorn');
    }
}