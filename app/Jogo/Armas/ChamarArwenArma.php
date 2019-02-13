<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;
use App\Jogo\Personagens\SociedadeDoAnel\AragornPersonagem;


final class ChamarArwenArma extends AbstractArma
{

    public function __construct()
    {

        $this->setForca(0);
        $this->setDestreza(0);
        $this->setMagia(50);
        $this->setNome('Chamar Arwen');
    }

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool
    {

        if($personagem instanceof AragornPersonagem) {

            return true;
        }

        return false;
    }
}