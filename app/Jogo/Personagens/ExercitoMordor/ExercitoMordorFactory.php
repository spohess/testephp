<?php

namespace App\Jogo\Personagens\ExercitoMordor;


use App\Jogo\Armas\AbstractArma;
use App\Jogo\Armas\ArsenaFactory;
use App\Jogo\Personagens\PersonagemInterface;

final class ExercitoMordorFactory
{

    public static function getTropa(): array
    {

        $personagens = [
            1 => UrukHaiPersonagem::class,
            2 => SnagaPersonagem::class,
            3 => OlhoDeSauronPersonagem::class,
        ];

        $indicesPersonagens = [1];

        while (count($indicesPersonagens) < 5) {

            $indiceGerado = rand(1, 3);

            if ($indiceGerado != 3) {

                $indicesPersonagens[] = $indiceGerado;

                continue;
            }

            if (!in_array($indiceGerado, $indicesPersonagens)) {

                $indicesPersonagens[] = $indiceGerado;

                continue;
            }
        }

        $exercitoMordor = [];
        foreach ($indicesPersonagens as $indice) {

            $exercitoMordor[] = new $personagens[$indice];
        }

        self::atribuiArsenal($exercitoMordor);

        return $exercitoMordor;
    }

    private static function atribuiArsenal($personagensGerado)
    {

        foreach ($personagensGerado as $personagem) {

            $arma = self::getArma($personagem);

            $personagem->setArma($arma);
        }
    }

    private static function getArma(PersonagemInterface $personagem)
    {

        $armas = ArsenaFactory::getArmas();
        $indice = rand(1, 11);

        $armaGerada = new $armas[$indice];

        if( !$armaGerada->atendeLimitacao($personagem, AbstractArma::HABILIDADE_FORCA) ) {

            return self::getArma($personagem);
        }

        if( !$armaGerada->atendeLimitacao($personagem, AbstractArma::HABILIDADE_DESTREZA) ) {

            return self::getArma($personagem);
        }

        if( !$armaGerada->atendeLimitacao($personagem, AbstractArma::HABILIDADE_MAGIA) ) {

            return self::getArma($personagem);
        }

        return $armaGerada;
    }
}