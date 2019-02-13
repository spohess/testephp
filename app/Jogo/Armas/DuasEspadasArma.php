<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class DuasEspadasArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(1, 3));
        $this->setDestreza(rand(4, 6));
        $this->setMagia(0);
        $this->setNome('Duas Espadas');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_DESTREZA ) {

            return true;
        }

        if( $personagem->getDestreza() < 5 ) {

            return false;
        }

        return true;
    }
}