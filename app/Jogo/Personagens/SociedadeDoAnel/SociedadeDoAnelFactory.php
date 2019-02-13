<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\TropaFactoryInterface;


final class SociedadeDoAnelFactory implements TropaFactoryInterface
{

    public static function getTropa(): array
    {

        return [
            1 => new FrodoPersonagem(),
            2 => new SamPersonagem(),
            3 => new MerryPersonagem(),
            4 => new PippinPersonagem(),
            5 => new AragornPersonagem(),
            6 => new BoromirPersonagem(),
            7 => new LegolasPersonagem(),
            8 => new GimliPersonagem(),
            9 => new GandalfPersonagem(),
        ];
    }

    public static function getHobbitsIndex(): array
    {

        return [1, 2, 3, 4];
    }
}