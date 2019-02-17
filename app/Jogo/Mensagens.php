<?php

namespace App\Jogo;


final class Mensagens
{

    public static function getMensagemRecuar()
    {

        $recuar = [
            1 => 'Os covardes morrem várias vezes antes da sua morte, mas o homem corajoso experimenta a morte apenas uma vez.',
            2 => 'O medo tem alguma utilidade, mas a covardia não.',
            3 => 'Poucas pessoas têm a coragem de ser covardes diante de testemunhas.',
            4 => 'Pessoas falsas são como cobras. Elas picam e fogem, pois são muito covardes para ficar e nos dar a oportunidade de pisar em suas cabeças!',
        ];

        return $recuar[rand(1, 4)];
    }
}