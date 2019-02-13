<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class CajadoArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(1);
        $this->setDestreza(0);
        $this->setMagia(rand(8, 10));
        $this->setNome('Cajado');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_MAGIA ) {

            return true;
        }

        if( $personagem->getMagia() < 10 ) {

            return false;
        }

        return true;
    }
}