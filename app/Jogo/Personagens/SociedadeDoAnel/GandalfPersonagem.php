<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\AbstractPersonagem;


final class GandalfPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 3;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 4;
    }

    protected function setMagia(): void
    {

        $this->magia = 10;
    }

    protected function setNome(): void
    {

        $this->nome = 'Gandalf';
    }
}