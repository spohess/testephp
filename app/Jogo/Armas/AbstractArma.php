<?php

namespace App\Jogo\Armas;


abstract class AbstractArma implements ArmaInterface
{

    protected $forca;

    protected $destreza;

    protected $magia;

    protected $limitacao;


    public function __construct()
    {

        $this->setForca();
        $this->setDestreza();
        $this->setMagia();
        $this->setLimitacao();
        $this->setNome();
    }

    abstract protected function setForca(): void;

    abstract protected function setDestreza(): void;

    abstract protected function setMagia(): void;

    abstract protected function setLimitacao(): void;

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

    public function getLimitacao()
    {

        return $this->limitacao;
    }
}
