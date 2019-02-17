@extends('layouts.main')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="jumbotron mt-5">
                <h1 class="display-4 text-center">Batalha da Sociedade do Anel</h1>
                <p class="lead text-center"><a href="{{ route('jogo_get_index') }}">Voltar ao jogo</a></p>
            </div>
        </div>

        <div class="col-12">
            <hr>
            <h2 class="text-center mb-5">{{ $titulo }}</h2>

            <div class="alert alert-{{ $class }}" role="alert">
                <h3 class="text-center mb-0">{{ $mensagem }}</h3>
            </div>
            <p class="lead text-center"><a href="{{ route('jogo_get_index') }}">Voltar ao jogo</a></p>
        </div>
    </div>
@endsection