<?php

use Illuminate\Support\Facades\Route;

Route::get('/redirect4', function () {
    return redirect()->route('rota.nomeada');
});

Route::get('/nome-de-rota', function () {
    return 'Rota nomeada';
})->name('rota.nomeada');

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::redirect('/redirect3', '/redirect2');

Route::get('/redirect1', function () {
    redirect('/redirect2');
});

Route::get('/redirect2', function () {
    return 'red 2';
});

Route::get('/categorias/{flag}/news/{count?}', function ($flag, $count = '10') {
    return "Produtos da categoria {$flag} (noticias)";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria {$flag}";
});

Route::match(['post', 'put'], '/match', function () {
    return 'Match';
});

Route::any('/any', function () {
    return 'Any';
});

Route::get('/pessoa', function () {
    return view('site.pessoa');
});

Route::get('/contato', function () {
    //return 'Contato';
    return view('contato');
});

Route::get('/', function () {
    return 'Olá';
});
