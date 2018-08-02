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

// Route::get('/ola', function () {
//     return "Olá";
// });

Route::get('/ola/{name}', function ($name) {
    return "Olá ". $name;
});


//ex 2a
Route::get('/meuPrimeiroCaminho', function () {
    return "<h1>Criei meu primeiro caminho em Laravel</h1>";
});

//ex 2b
Route::get('/resultado/{numero}', function ($numero) {
    if($numero % 2 === 0){
        return "O número é par";
    }else{
        return "O número é ímpar";
    }
});

//ex 2c
Route::get('/numero/{numero}/{numero2?}', function ($numero, $numero2 = null) {
    if($numero2 !== null){
        return "A multiplicação entre: ". $numero ." e ". $numero2 ." é: ". $numero*$numero2;
    } else{
        if($numero % 2 == 0){
            return "O número é par";
        }else{
        return "O número é ímpar";
        }
    }
});

//ex complementar
Route::get('/exComplementar/{nome}', function ($nome) {
    if($nome == "wagner"){
        return redirect("/");
        //se eu dou um redirect na rota "/" ela tem q existir lá em cima, senão, n aparece nada
    } else{
        return "<h1>Olá, ". $nome .", digite na url: exComplementar/wagner para prosseguir para a home</h1>";
    }
});


