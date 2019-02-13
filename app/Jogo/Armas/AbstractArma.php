<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;
use App\Jogo\TemHabilidade;


abstract class AbstractArma implements ArmaInterface
{

    use TemHabilidade;

    const HABILIDADE_FORCA = 'forca';

    const HABILIDADE_DESTREZA = 'destreza';

    const HABILIDADE_MAGIA = 'magia';


    public function aumentaForca(PersonagemInterface $personagem): void
    {

        if( $this->atendeLimitacao($personagem, self::HABILIDADE_FORCA) ) {

            $personagem->setForca( $personagem->getForca() + $this->getForca() );
        }
    }

    public function aumentaDestreza(PersonagemInterface $personagem): void
    {

        if( $this->atendeLimitacao($personagem, self::HABILIDADE_DESTREZA) ) {

            $personagem->setDestreza( $personagem->getDestreza() + $this->getDestreza() );
        }
    }

    public function aumentaMagia(PersonagemInterface $personagem): void
    {

        if( $this->atendeLimitacao($personagem, self::HABILIDADE_MAGIA) ) {

            $personagem->setMagia( $personagem->getMagia() + $this->getMagia() );
        }
    }
}
