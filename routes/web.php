<?php

use Illuminate\Support\Facades\Route;

Route::post('products', 'ProductController@store')->name('products.store');

Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');

Route::get('products/create', 'ProductController@create')->name('products.create');

Route::get('products/{id}', 'ProductController@show')->name('products.show');

Route::get('products', 'ProductController@index')->name('products.index');

Route::put('products/{id}', 'ProductController@update')->name('products.update');

Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');

/*
Route::middleware([])->group(function () {

    Route::prefix('categorias')->group(function () {
        Route::get('/{flag}/news/{count?}', function ($flag, $count = '10') {
            return "Produtos da categoria {$flag} (noticias)";
        });
        
        Route::get('/{flag}', function ($flag) {
            return "Produtos da categoria {$flag}";
        });

        Route::namespace('Admin')->group(function () {
            Route::get('/', 'TesteController@teste');
        });
    });

});
*/
/*

// mais enxuto (name não funciona)
// php artisan route:cache (limpa o cache das rotas)

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'categorias',
    'namespace' => 'Admin'
], function () {

});

*/
/*
Route::get('admin/dashboard', function () {
    return 'Home Admin';
})->middleware(['auth']);

Route::get('/login', function () {
    return 'Login';
})->name('login');

Route::get('/redirect4', function () {
    return redirect()->route('rota.nomeada');
});

Route::get('/nome-de-rota', function () {
    return 'Rota nomeada';
})->name('rota.nomeada');

Route::view('/view/login', 'welcome', ['login' => 'true']);

Route::redirect('/redirect3', '/redirect2');

Route::get('/redirect1', function () {
    redirect('/redirect2');
});

Route::get('/redirect2', function () {
    return 'red 2';
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
*/