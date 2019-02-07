@extends('layouts.main')

@section('conteudo')
    <div class="row">
        <div class="col-12">

            <div class="jumbotron mt-5">
                <h1 class="display-4 text-center">Batalha da Sociedade do Anel</h1>
                <p class="lead text-center">Jogo para avaliar profissionais de PHP baseado no filme Senhor dos Anéis</p>
            </div>

        </div>

        @include('site.jogabilidade')

        @include('site.pontuacao')

        @include('site.regras')

    </div>

@endsection