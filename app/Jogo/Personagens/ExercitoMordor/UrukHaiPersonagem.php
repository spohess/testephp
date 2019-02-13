<?php

namespace App\Jogo\Personagens\ExercitoMordor;

use App\Jogo\Personagens\AbstractPersonagem;


final class UrukHaiPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 10;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 7;
    }

    protected function setMagia(): void
    {

        $this->magia = 0;
    }

    protected function setNome(): void
    {

        $this->nome = 'Uruk-Hai';
    }
}