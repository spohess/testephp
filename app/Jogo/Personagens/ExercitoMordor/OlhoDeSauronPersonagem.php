<?php

namespace App\Jogo\Personagens\ExercitoMordor;

use App\Jogo\Personagens\AbstractPersonagem;


final class OlhoDeSauronPersonagem extends AbstractPersonagem
{


    protected function setForca(): void
    {

        $this->forca = 100;
    }

    protected function setDestreza(): void
    {

        $this->destreza = 100;
    }

    protected function setMagia(): void
    {

        $this->magia = 1000;
    }

    protected function setNome(): void
    {

        $this->nome = 'Olho de Sauron';
    }
}