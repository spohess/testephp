<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class BoromirPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 9;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 4;
    }

    protected function setMagia(): void
    {

        $this->magia = 0;
    }

    protected function setNome(): void
    {

        $this->nome = 'Boromir';
    }
}