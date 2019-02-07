<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class JogoController extends Controller
{

    public function getIndex(Request $request)
    {

        return view('jogo.index');
    }
}
