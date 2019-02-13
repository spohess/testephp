<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;
use App\Jogo\Personagens\SociedadeDoAnel\FrodoPersonagem;


final class UmAnelArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(100);
        $this->setDestreza(100);
        $this->setMagia(100);
        $this->setNome('Um Anel');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if($personagem instanceof FrodoPersonagem) {

            return true;
        }

        return false;
    }
}