<?php

namespace App\Jogo\Armas;


final class ArsenaFactory
{

    public static function getArmas()
    {

        return [
            1 => EspadaCurtaArma::class,
            2 => EspadaCurtaMagicaArma::class,
            3 => EspadaLongaArma::class,
            4 => DuasEspadasArma::class,
            5 => ArcoCurtoArma::class,
            6 => ArcoLongoArma::class,
            7 => MachadoArma::class,
            8 => MachadoDuploArma::class,
            9 => CajadoArma::class,
            10 => UmAnelArma::class,
            11 => ChamarArwenArma::class,
        ];
    }

    public static function getArsenal()
    {

        $armas = self::getArmas();

        $numerosGerados = [];
        for ($i = 0; $i < 5; $i++){

            $numerosGerados = self::getNumero($numerosGerados);
        }

        $armasSelecionadas = [];
        foreach ($numerosGerados as $indice) {

            $armasSelecionadas[$indice] = new $armas[$indice];
        }

        session()->put('armasSelecionadas', $armasSelecionadas);
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