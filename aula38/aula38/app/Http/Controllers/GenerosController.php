<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genres;
use App\Movie;

class GenerosController extends Controller
{
    public function exibir($id){
        $genero = Genres::find($id);
        return view('exibirGeneros')->with('genero', $genero);
    }

    public function formGenres(){
        $genero = Genres::all();
        return view('formFilmesGenero')->with('genero', $genero);
    }

    public function validar (Request $request){
        $this->validate($request, [
            'title' => 'required',
            'genre_id' => 'required',
            'rating' => 'numeric|min:1-max:10',
            'awards' => 'numeric|min:0',
            'length' => 'numeric|min:50',
            'release_date' => 'date'
        ]);

        $dataParaBanco = date_create_from_format('Y-m-d', $request->input('release_date'));

        $usuario = Movie::create([
            'title' => $request->input('title'),
            'genre_id' => $request->input('genre_id'),
            'rating' => $request->input('rating'),
            'awards' =>$request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $dataParaBanco
        ]);

        if($usuario->save()){
            return 'Filme cadastrado com sucesso!';
        }else{
            return view('formFilmesGenero')->with('request', $request);
        }

        // $sucesso = $filme->save();

        // if($sucesso){
        //     return view('form')->with('sucesso', true);
        // }else{
        //     return view('form')->with('ocorreuErro', true);
        // }

    }
}
