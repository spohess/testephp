<?php

namespace App\Http\Middleware;

use App\Exceptions\JogoException;
use Closure;


class FluxoLiberadoMiddleware
{

    public function handle($request, Closure $next)
    {

        $fluxoLiberado = session()->get('fluxoliberado');

        if( empty($fluxoLiberado) ){

            throw new JogoException('Fluxo de jogo incorreto');
        }

        session()->remove('fluxoliberado');

        return $next($request);
    }
}
