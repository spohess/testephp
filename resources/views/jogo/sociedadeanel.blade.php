<form method="post" action="{{ route('jogo_post_tropa') }}" id="formTropa">
    {{ csrf_field() }}
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-6">

            <div class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    Personagem
                    <span class="badge badge-warning badge-pill">força / destreza / magia</span>
                </li>
                @foreach($sociedade as $indicePersonagem => $personagem)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="form-group form-check mb-0">
                            <input type="checkbox" class="form-check-input personagem" name="tropa[{{ $indicePersonagem }}]" id="personagemIdx{{ $indicePersonagem }}" data-chave="{{ $indicePersonagem }}">
                            <label class="form-check-label" for="personagemIdx{{ $indicePersonagem }}">{{ $personagem->getNome() }}</label>
                        </div>
                        <span class="badge badge-primary badge-pill">
                            {{ $personagem->getForca() }} /
                            {{ $personagem->getDestreza() }} /
                            {{ $personagem->getMagia() }}
                        </span>
                    </li>
                @endforeach
            </div>

        </div>
    </div>
    <div class="row justify-content-md-center mt-3">
        <div class="col-12 col-md-6">
            <input type="button" id="enviaTropa" class="btn btn-primary float-right" value="Enviar Tropa">
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {

        $('#enviaTropa').on('click', function () {

            let hobbits = [0, 1, 2, 3];
            let temHobbit = false;
            let personagem = $('.personagem:checked');

            personagem.each(function () {

                if (jQuery.inArray($(this).data('chave'), hobbits) >= 0) {

                    temHobbit = true;
                }
            });

            if (!temHobbit) {

                alert('Selecione um Hobbit');
                return false;
            }

            if( personagem.length !== 5 ) {

                alert('Escolha 5 personagens');
                return false;
            }

            $('#formTropa').submit();
        });
    });
</script>