<?php

namespace App\Jogo;


trait TemHabilidade
{

    protected $forca = 0;

    protected $destreza = 0;

    protected $magia = 0;

    protected $nome = '';


    public function setForca(int $forca): void
    {

        $this->forca = $forca;
    }

    public function setDestreza(int $destreza): void
    {

        $this->destreza = $destreza;
    }

    public function setMagia(int $magia): void
    {

        $this->magia = $magia;
    }

    public function setNome(string $nome): void
    {

        $this->nome = $nome;
    }

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

    public function getNome(): string
    {

        return $this->nome;
    }
}