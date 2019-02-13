<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class EspadaLongaArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(4, 6));
        $this->setDestreza(1);
        $this->setMagia(0);
        $this->setNome('Espada Longa');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_FORCA ) {

            return true;
        }

        if( $personagem->getForca() < 5 ) {

            return false;
        }

        return true;
    }
}