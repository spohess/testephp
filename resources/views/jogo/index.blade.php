@extends('layouts.main')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="jumbotron mt-5">
                <h1 class="display-4 text-center">Batalha da Sociedade do Anel</h1>
            </div>
        </div>
    </div>

    @if($etapa == 'sociedadeanel')

        @include('jogo.sociedadeanel')
    @endif

@endsection