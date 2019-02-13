<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class ArcoCurtoArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(1, 3));
        $this->setDestreza(rand(3, 4));
        $this->setMagia(0);
        $this->setNome('Arco Curto');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_DESTREZA ) {

            return true;
        }

        if( $personagem->getDestreza() < 4 ) {

            return false;
        }

        return true;
    }
}