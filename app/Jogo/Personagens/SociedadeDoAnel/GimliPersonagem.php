<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class GimliPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 8;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 3;
    }

    protected function setMagia(): void
    {

        $this->magia = 0;
    }

    protected function setNome(): void
    {

        $this->nome = 'Gimli';
    }
}