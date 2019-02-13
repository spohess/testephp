<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class EspadaCurtaMagicaArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(1, 3));
        $this->setDestreza(rand(2, 4));
        $this->setMagia(1);
        $this->setNome('Espada Curta Mágica');
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