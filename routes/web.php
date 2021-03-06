<?php

Route::get('/', 'SiteController@getIndex');

Route::prefix('/jogo')->group(function (){

    Route::get('/erro', 'JogoController@getErro')->name('jogo_get_erro');

    Route::get('/tropa', 'JogoController@getIndex')->name('jogo_get_index');
    Route::post('/tropa', 'JogoController@postTropa')->name('jogo_post_tropa');

    Route::get('/armas', 'JogoController@getArmas')->name('jogo_get_armas')->middleware(['fluxoliberado']);
    Route::post('/armas', 'JogoController@postArmas')->name('jogo_post_armas');

    Route::get('/reconhecimento', 'JogoController@getReconhecimento')->name('jogo_get_reconhecimento')->middleware(['fluxoliberado']);

    Route::get('/recuar', 'JogoController@getRecuar')->name('jogo_get_recuar');
    Route::get('/batalha', 'JogoController@getBatalha')->name('jogo_get_batalha');
});