<?php

namespace App\Jogo\Personagens\SociedadeDoAnel;

use App\Jogo\Personagens\TropaFactoryInterface;


final class SociedadeDoAnelFactory implements TropaFactoryInterface
{

    public static function getTropa(): array
    {

        return [
            new FrodoPersonagem(),      // 0
            new SamPersonagem(),        // 1
            new MerryPersonagem(),      // 2
            new PippinPersonagem(),     // 3
            new AragornPersonagem(),    // 4
            new BoromirPersonagem(),    // 5
            new LegolasPersonagem(),    // 6
            new GimliPersonagem(),      // 7
            new GandalfPersonagem(),    // 8
        ];
    }

    public static function getHobbitsIndex(): array
    {

        return [0, 1, 2, 3];
    }
}