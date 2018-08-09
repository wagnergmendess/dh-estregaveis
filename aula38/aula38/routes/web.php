<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rotas de Filmes
Route::get('/filmes', 'FormController@form');
Route::post('/validar', 'FormController@validar');

// Rota para exibir todos os filmes
Route::get('/exibirFilmes', 'FormController@exibirFilmes');

Route::get('/filme/edit/{id}', 'FormController@editForm');
Route::put('/filme/edit/{id}', 'FormController@update');

// Route::delete('/filme/delete/{id}', 'FormController@delete');


// Rotas de Atores
Route::get('/ator', 'FormAtorController@atorForm');
Route::post('/validarAtor', 'FormAtorController@validarAtor');
