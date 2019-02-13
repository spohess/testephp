<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


final class ArcoLongoArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(rand(3, 5));
        $this->setDestreza(rand(5, 7));
        $this->setMagia(0);
        $this->setNome('Arco Longo');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if( $habilidade != self::HABILIDADE_DESTREZA ) {

            return true;
        }

        if( $personagem->getDestreza() < 7 ) {

            return false;
        }

        return true;
    }
}