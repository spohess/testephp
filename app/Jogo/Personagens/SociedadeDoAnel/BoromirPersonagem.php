<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class BoromirPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(9);
        $this->setDestreza(4);
        $this->setMagia(0);
        $this->setNome('Boromir');
    }
}