<?php

namespace App\Jogo\Personagens\ExercitoMordor;

use App\Jogo\Personagens\AbstractPersonagem;


final class SnagaPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 4;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 6;
    }

    protected function setMagia(): void
    {

        $this->magia = 0;
    }

    protected function setNome(): void
    {

        $this->nome = 'Snaga';
    }
}