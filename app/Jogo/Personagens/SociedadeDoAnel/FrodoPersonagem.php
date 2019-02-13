<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class FrodoPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 1;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 2;
    }

    protected function setMagia(): void
    {

        $this->magia = 0;
    }

    protected function setNome(): void
    {

        $this->nome = 'Frodo';
    }
}