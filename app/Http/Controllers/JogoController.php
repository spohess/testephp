<?php

namespace App\Http\Controllers;

use App\Exceptions\JogoException;
use App\Http\Requests\PostTropaRequest;
use App\Jogo\Armas\ArsenaFactory;
use App\Jogo\Mensagens;
use App\Jogo\Personagens\ExercitoMordor\ExercitoMordorFactory;
use App\Jogo\Personagens\SociedadeDoAnel\SociedadeDoAnelFactory;
use App\Jogo\Tropa;
use Illuminate\Http\Request;


class JogoController extends Controller
{

    public function getErro(Request $request)
    {

        $mensagem = session()->get('mensagem') ?? '404';

        return view('jogo.erros', ['mensagem' => $mensagem]);
    }

    public function getIndex(Request $request)
    {

        ExercitoMordorFactory::getTropa();

        $dadosView = [
            'etapa' => 'sociedadeanel',
            'sociedade' => SociedadeDoAnelFactory::getTropa()
        ];

        return view('jogo.index', $dadosView);
    }

    public function postTropa(PostTropaRequest $request)
    {

        Tropa::validaTropaSelecionada($request->tropa);

        session()->put('fluxoliberado', true);

        Tropa::separaSelecionados();

        return redirect(route('jogo_get_armas'));
    }

    public function getArmas(Request $request)
    {

        ArsenaFactory::getArsenal();

        $dadosView = [
            'etapa' => 'armas',
            'sociedade' => session()->get('selecionados'),
            'armas' => session()->get('armasSelecionadas'),
        ];

        return view('jogo.index', $dadosView);
    }

    public function postArmas(Request $request)
    {

        if (count($request->armas) != 5) {

            throw new JogoException('Entregue todas as armas');
        }

        session()->put('fluxoliberado', true);

        Tropa::entregaDeArmas($request->armas);

        return redirect(route('jogo_get_reconhecimento'));
    }

    public function getReconhecimento(Request $request)
    {

        $exercidoMordor = ExercitoMordorFactory::getTropa();

        session()->put('exercidoMordor', $exercidoMordor);

        $dadosView = [
            'etapa' => 'reconhecimento',
            'exercidoMordor' => $exercidoMordor,
        ];

        return view('jogo.index', $dadosView);
    }

    public function getRecuar(Request $request)
    {

        session()->remove('fluxoliberad o');
        session()->remove('selecionados');
        session()->remove('exercidoMordor');

        $dadosView = [
            'etapa' => 'resultado',
            'titulo' => 'Covarde',
            'class' => 'danger',
            'mensagem' => Mensagens::getMensagemRecuar(),
        ];

        return view('jogo.index', $dadosView);
    }

    public function getBatalha(Request $request)
    {

        //
    }
}
