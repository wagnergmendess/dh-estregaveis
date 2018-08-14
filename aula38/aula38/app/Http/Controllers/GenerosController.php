<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genres;

class GenerosController extends Controller
{
    public function exibir($id){
        $genero = Genres::find($id);
        return view('exibirGeneros')->with('genero', $genero);
    }
}
