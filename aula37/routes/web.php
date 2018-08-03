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

Route::get('/filmes/{id}', 'FilmeController@procurarFilmeId');

Route::get('/filmess/{nome}', 'FilmeController@procurarFilmeNome');

Route::get('/adicionarFilme/{filme}', 'FilmeController@adicionarFilme');

Route::get('/listarFilmes', 'FilmeController@listarFilmes');

Route::get('/atores', 'AtorController@directory');

Route::get('/ator/{id}', 'AtorController@show');
