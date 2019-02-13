<?php

namespace App\Http\Controllers;

use App\Jogo\Personagens\SociedadeDoAnel\FrodoPersonagem;
use Illuminate\Http\Request;


class JogoController extends Controller
{

    public function getIndex(Request $request)
    {

        $frodo = new FrodoPersonagem();

        $dadosView = [
            'etapa' => 'sociedadeanel',
        ];

        return view('jogo.index', $dadosView);
    }
}
