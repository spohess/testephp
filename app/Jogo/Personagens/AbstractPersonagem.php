<?php

namespace App\Jogo\Personagens;

use App\Jogo\Armas\TraitArmado;


abstract class AbstractPersonagem implements PersonagemInterface
{

    use TraitArmado;


    protected $forca;

    protected $destreza;

    protected $magia;

    protected $nome;


    public function __construct()
    {

        $this->setForca();
        $this->setDestreza();
        $this->setMagia();
        $this->setNome();
    }

    abstract protected function setForca(): void;

    abstract protected function setDestreza(): void;

    abstract protected function setMagia(): void;

    abstract protected function setNome(): void;


    public function getForca(): int
    {

        return $this->forca;
    }

    public function getDestreza(): int
    {

        return $this->destreza;
    }

    public function getMagia(): int
    {

        return $this->magia;
    }

    public function getNome()
    {

        return $this->nome;
    }
}