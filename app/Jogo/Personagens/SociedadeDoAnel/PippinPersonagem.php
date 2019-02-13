<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class PippinPersonagem extends AbstractPersonagem
{


    public function __construct()
    {

        $this->setForca(2);
        $this->setDestreza(2);
        $this->setMagia(0);
        $this->setNome('Pippin');
    }
}