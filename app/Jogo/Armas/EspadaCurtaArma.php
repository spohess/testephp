<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class EspadaCurtaArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(1, 3));
        $this->setDestreza(rand(2, 4));
        $this->setMagia(0);
        $this->setNome('Espada Curta');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_FORCA ) {

            return true;
        }

        if( $personagem->getForca() < 2 ) {

            return false;
        }

        return true;
    }
}