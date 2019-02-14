<form method="post" action="{{ route('jogo_post_armas') }}" id="formArma">
    {{ csrf_field() }}
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-6">

            <div class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    Armas
                </li>
                @foreach($sociedade as $indicePersonagem => $personagem)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-group form-check mb-0">
                            <label class="form-check-label">{{ $personagem->getNome() }}</label>
                        </div>
                        <div class="float-rigth">
                            <select class="custom-select custom-select-sm seletorDeArma" name="armas[{{ $indicePersonagem }}]">
                                <option value="">Selecione uma Arma</option>
                                @foreach($armas as $indiceArma => $arma)
                                    <option value="{{ $indiceArma }}">{{ $arma->getNome() }}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                @endforeach
            </div>

        </div>
    </div>
    <div class="row justify-content-md-center mt-3">
        <div class="col-12 col-md-6">
            <input type="button" id="atribuiArmas" class="btn btn-primary float-right" value="Entrega Armas">
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {

        $('.seletorDeArma').on('change', function () {
            let armasSelecionadas = [];
            let principal = $(this);

            $('.seletorDeArma').find('option:selected').each(function () {
                if ($(this).val() !== '') {
                    if (armasSelecionadas.indexOf($(this).val()) >= 0) {
                        alert('Essa arma já foi selecionada');
                        principal.val('');
                    } else {
                        armasSelecionadas.push($(this).val());
                    }
                }
            });
        });

        $('#atribuiArmas').on('click', function () {

            $('.seletorDeArma').find('option:selected').each(function () {

                if ($(this).val() === '') {

                    alert('Entregue todas as armas');
                    return false;
                }
            });

            $('#formArma').submit();
        });
    });
</script>