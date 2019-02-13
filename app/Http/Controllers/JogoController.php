<?php

namespace App\Http\Controllers;

use App\Exceptions\JogoException;
use App\Jogo\Personagens\SociedadeDoAnel\FrodoPersonagem;
use App\Jogo\Personagens\SociedadeDoAnel\SociedadeDoAnelFactory;
use Illuminate\Http\Request;


class JogoController extends Controller
{

    public function getIndex(Request $request)
    {

        $dadosView = [
            'etapa' => 'sociedadeanel',
            'sociedade' => SociedadeDoAnelFactory::getTropa()
        ];

        return view('jogo.index', $dadosView);
    }

    public function postTropa(Request $request)
    {

        $this->validaPostTropa($request);
    }

    private function validaPostTropa(Request $request)
    {

        $hobbits = SociedadeDoAnelFactory::getHobbitsIndex();
        $tropa = array_values(array_keys($request->tropa));

        if (empty($request->tropa)) {

            throw new JogoException('Escolha os personagens corretamente');
        }

        if (empty(array_intersect($tropa, $hobbits))) {

            throw new JogoException('Escolha pelo menos um Hobbit');
        }

        if( count($tropa) != 5 ) {

            throw new JogoException('Escolha 5 personagens');
        }
    }
}
