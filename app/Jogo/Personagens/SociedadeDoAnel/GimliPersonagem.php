<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class GimliPersonagem extends AbstractPersonagem
{


    public function __construct()
    {

        $this->setForca(8);
        $this->setDestreza(3);
        $this->setMagia(0);
        $this->setNome('Gimli');
    }
}