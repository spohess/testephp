<?php

Route::get('/', 'SiteController@getIndex');

Route::prefix('/jogo')->group(function (){

    Route::get('/', 'JogoController@getIndex')->name('jogo_get_index');
    Route::post('/tropa', 'JogoController@postTropa')->name('jogo_post_tropa');
});