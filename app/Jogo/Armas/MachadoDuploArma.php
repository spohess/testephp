<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class MachadoDuploArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(6, 8));
        $this->setDestreza(rand(0, 2));
        $this->setMagia(0);
        $this->setNome('Machado Duplo');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_FORCA ) {

            return true;
        }

        if( $personagem->getForca() < 8 ) {

            return false;
        }

        return true;
    }
}