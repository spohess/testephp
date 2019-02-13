<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class GandalfPersonagem extends AbstractPersonagem
{

    public function __construct()
    {

        $this->setForca(3);
        $this->setDestreza(4);
        $this->setMagia(10);
        $this->setNome('Gandalf');
    }
}