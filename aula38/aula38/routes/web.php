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

// Rota para editar os filmes
Route::get('/filme/edit/{id}', 'FormController@editForm');
Route::put('/filme/edit/{id}', 'FormController@update');

// Rota para deletar os filmes
Route::get('/filme/delete/{id}', 'FormController@deleteForm');
Route::put('/filme/delete/{id}', 'FormController@deletedMovie');



// Rotas de Atores
Route::get('/ator', 'FormAtorController@atorForm');
Route::post('/validarAtor', 'FormAtorController@validarAtor');

// Rota para exibir todos os atores
Route::get('/exibirAtores', 'FormAtorController@exibirAtores');

// Rota para editar os filmes
Route::get('/ator/edit/{id}', 'FormAtorController@editAtor');
Route::put('/ator/edit/{id}', 'FormAtorController@updateAtor');

// Rota para deletar os atores
Route::get('/ator/delete/{id}', 'FormAtorController@deleteAtor');
Route::delete('/ator/delete/{id}', 'FormAtorController@deletedAtor');



// Rotas de Generos
Route::get('/exibirGeneros/{id}', 'GenerosController@exibir');
