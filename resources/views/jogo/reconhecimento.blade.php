<form method="get" action="{{ route('jogo_get_batalha') }}" id="formBatalha">
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-6">

            <div class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    Inimigos
                    <span class="badge badge-warning badge-pill">Arma</span>
                </li>
                @foreach($exercidoMordor as $indicePersonagem => $personagem)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-group form-check mb-0">
                            <label class="form-check-label">{{ $personagem->getNome() }}</label>
                        </div>
                        <span class="badge badge-primary badge-pill">
                            {{ $personagem->getArma()->getNome() }}
                        </span>
                    </li>
                @endforeach
            </div>

        </div>
    </div>
    <div class="row justify-content-md-center mt-3">
        <div class="col-12 col-md-6">
            <input type="button" id="recuarTropa" class="btn btn-warning" value="Recuar">
            <input type="button" id="marcharParaBatalha" class="btn btn-danger float-right" value="Marchar Para Batalha">
        </div>
    </div>
</form>
<form method="get" action="{{ route('jogo_get_recuar') }}" id="formRecuar"></form>

<script>
    $(document).ready(function () {

        $('#marcharParaBatalha').on('click', function () {
            $('#formBatalha').submit();
        });

        $('#recuarTropa').on('click', function () {
            $('#formRecuar').submit();
        });
    });
</script>