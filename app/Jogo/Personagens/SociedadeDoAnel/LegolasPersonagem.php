<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class LegolasPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 5;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 9;
    }

    protected function setMagia(): void
    {

        $this->magia = 4;
    }

    protected function setNome(): void
    {

        $this->nome = 'Legolas';
    }
}