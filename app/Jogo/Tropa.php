<?php

namespace App\Jogo;

use App\Exceptions\JogoException;
use App\Jogo\Personagens\SociedadeDoAnel\SociedadeDoAnelFactory;


final class Tropa
{


    public static function validaTropaSelecionada($tropa = null)
    {


        if (empty($tropa)) {

            throw new JogoException('Escolha os personagens corretamente');
        }

        $hobbits = SociedadeDoAnelFactory::getHobbitsIndex();
        $tropaSelecionada = array_values(array_keys($tropa));

        if (empty(array_intersect($tropaSelecionada, $hobbits))) {

            throw new JogoException('Escolha pelo menos um Hobbit');
        }

        if (count($tropaSelecionada) != 5) {

            throw new JogoException('Escolha 5 personagens');
        }

        session()->put('selecionados', $tropaSelecionada);
    }

    public static function separaSelecionados()
    {

        $sociedade = SociedadeDoAnelFactory::getTropa();

        $tropaSelecionada = [];
        foreach (session()->get('selecionados') as $selecionado) {

            $tropaSelecionada[] = $sociedade[$selecionado];
        }

        session()->put('selecionados', $tropaSelecionada);
    }
}