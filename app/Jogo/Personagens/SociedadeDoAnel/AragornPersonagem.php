<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class AragornPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 8;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 5;
    }

    protected function setMagia(): void
    {

        $this->magia = 1;
    }

    protected function setNome(): void
    {

        $this->nome = 'Aragorn';
    }
}