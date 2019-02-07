@extends('layouts.main')

@section('conteudo')
    <div class="row">
        <div class="col-12">

            <div class="jumbotron mt-5">
                <h1 class="display-4 text-center">Batalha da Sociedade do Anel</h1>
                <p class="lead text-center">Jogo para avaliar profissionais de PHP baseado no filme Senhor dos Anéis</p>
            </div>

        </div>
        <div class="col-12">
            <h2>Jogabilidade</h2>
            <hr class="mb-5">

            <ul class="list-unstyled">
                <li>
                    <p><strong>1º Passo:</strong> Escolher 5 membros da Sociedade do Anel para ir à batalha;</p>
                    <ul>
                        <li><p><strong>Observação:</strong> Deve haver pelo menos 1 Hobbit na sua tropa;</p></li>
                    </ul>
                </li>
                <li>
                    <p><strong>2º Passo:</strong> Entregar à seus membros as 5 armas que foram disponibilizadas para a batalha;</p>
                    <ul>
                        <li><p><strong>Observação:</strong> Nenhum membro poderá utilizar uma arma onde ele não atenda a habilidade mínima dela, ou seja, um membro de força 3 não poderá utilizar uma espada de força minima 5. Se essa arma for dada a ele ela será dropada na batalha e os pontos dela não serão computados;</p></li>
                    </ul>
                </li>
                <li>
                    <p><strong>3º Passo:</strong> Analisar quais Orcs vieram para batalha e as armas que eles usam;</p>
                </li>
                <li>
                    <p><strong>4º Passo:</strong> Escolher entre ir para a <strong class="text-success">batalha</strong> ou <strong class="text-danger">correr</strong>;</p>
                </li>
                <li>
                    <p><strong>5º Passo:</strong> Ver quem ganhou a batalha;</p>
                    <ul>
                        <li><p><strong>Observação:</strong> Os pontos da sua tropa e armas serão somados assim como a tropa dos orcs e suas armas, quem tiver mais pontos vence;</p></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-12 mt-5">
            <h2>Pontuação</h2>
            <hr class="mb-5">
            <h3>Personagens</h3>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Personagem</th>
                        <th scope="col">Força</th>
                        <th scope="col">Destreza</th>
                        <th scope="col">Magia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Frodo <small>Hobbit</small></th>
                        <td>2</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Sam <small>Hobbit</small></th>
                        <td>3</td>
                        <td>4</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Merry <small>Hobbit</small></th>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Pippin <small>Hobbit</small></th>
                        <td>1</td>
                        <td>2</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Aragorn <small>Humano</small></th>
                        <td>8</td>
                        <td>5</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">Boromir <small>Humano</small></th>
                        <td>9</td>
                        <td>4</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Legolas <small>Elfo</small></th>
                        <td>5</td>
                        <td>9</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <th scope="row">Gimli <small>Anão</small></th>
                        <td>8</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Gandalf <small>Mago</small></th>
                        <td>3</td>
                        <td>4</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th scope="row">Uruk-Hai <small>Orc</small></th>
                        <td>10</td>
                        <td>7</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Snaga <small>Orc</small></th>
                        <td>4</td>
                        <td>6</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>

            <h3>Armas</h3>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Arma</th>
                        <th scope="col">Força <small>min-max</small></th>
                        <th scope="col">Destreza <small>min-max</small></th>
                        <th scope="col">Magia <small>min-max</small></th>
                        <th scope="col">Limitação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Espada curta</th>
                        <td>1-3</td>
                        <td>2-4</td>
                        <td>0</td>
                        <td>Força >= 2</td>
                    </tr>
                    <tr>
                        <th scope="row">Espada curta mágica</th>
                        <td>1-3</td>
                        <td>2-4</td>
                        <td>1</td>
                        <td>Força >= 2</td>
                    </tr>
                    <tr>
                        <th scope="row">Espada longa</th>
                        <td>4-6</td>
                        <td>1</td>
                        <td>0</td>
                        <td>Força >= 5</td>
                    </tr>
                    <tr>
                        <th scope="row">Duas espadas</th>
                        <td>1-3</td>
                        <td>4-6</td>
                        <td>0</td>
                        <td>Destreza >= 5</td>
                    </tr>
                    <tr>
                        <th scope="row">Arco longo</th>
                        <td>3-5</td>
                        <td>5-7</td>
                        <td>0</td>
                        <td>Destreza >= 7</td>
                    </tr>
                    <tr>
                        <th scope="row">Arco curto</th>
                        <td>1-3</td>
                        <td>3-4</td>
                        <td>0</td>
                        <td>Destreza >= 4</td>
                    </tr>
                    <tr>
                        <th scope="row">Machado</th>
                        <td>4-6</td>
                        <td>1-3</td>
                        <td>0</td>
                        <td>Força >= 5</td>
                    </tr>
                    <tr>
                        <th scope="row">Machado duplo</th>
                        <td>6-8</td>
                        <td>0-2</td>
                        <td>0</td>
                        <td>Força >= 8</td>
                    </tr>
                    <tr>
                        <th scope="row">Cajado</th>
                        <td>1</td>
                        <td>0</td>
                        <td>8-10</td>
                        <td>Magia >= 10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection