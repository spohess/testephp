<?php

namespace App\Jogo\Armas;


final class ArsenaFactory
{

    public static function getArsenal(): array
    {

        $armas = [
            1 => new EspadaCurtaArma(),
            2 => new EspadaCurtaMagicaArma(),
            3 => new EspadaLongaArma(),
            4 => new DuasEspadasArma(),
            5 => new ArcoCurtoArma(),
            6 => new ArcoLongoArma(),
            7 => new MachadoArma(),
            8 => new MachadoDuploArma(),
            9 => new CajadoArma(),
            10 => new UmAnelArma(),
            11 => new ChamarArwenArma(),
        ];

        $numerosGerados = [];
        for ($i = 0; $i < 5; $i++){

            $numerosGerados = self::getNumero($numerosGerados);
        }

        $armasSelecionadas = [];
        foreach ($numerosGerados as $indice) {

            $armasSelecionadas[$indice] = $armas[$indice];
        }

        return $armasSelecionadas;
    }

    private static function getNumero(array $numerosGerados): array
    {

        $numero = rand(1, 11);

        if( !in_array($numero, $numerosGerados) ) {

            $numerosGerados[] = $numero;

            return $numerosGerados;
        }

        return self::getNumero($numerosGerados);
    }
}