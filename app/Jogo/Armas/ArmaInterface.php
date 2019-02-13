<?php

namespace App\Jogo\Armas;

use App\Jogo\Personagens\PersonagemInterface;


interface ArmaInterface
{

    public function aumentaForca(PersonagemInterface $personagem): void;

    public function aumentaDestreza(PersonagemInterface $personagem): void;

    public function aumentaMagia(PersonagemInterface $personagem): void;

    public function atendeLimitacao(PersonagemInterface $personagem, string $habilidade): bool;
}