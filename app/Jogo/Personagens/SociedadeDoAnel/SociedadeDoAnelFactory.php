<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\TropaFactoryInterface;


final class SociedadeDoAnelFactory implements TropaFactoryInterface
{

    public static function getTropa(): array
    {

        return [
            new FrodoPersonagem(),
            new SamPersonagem(),
            new MerryPersonagem(),
            new PippinPersonagem(),
            new AragornPersonagem(),
            new BoromirPersonagem(),
            new LegolasPersonagem(),
            new GimliPersonagem(),
            new GandalfPersonagem(),
        ];
    }

    public static function getHobbitsIndex(): array
    {

        return [0, 1, 2, 3];
    }
}