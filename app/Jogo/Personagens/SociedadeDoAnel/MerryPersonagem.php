<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class MerryPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(3);
        $this->setDestreza(2);
        $this->setMagia(0);
        $this->setNome('Merry');
    }
}