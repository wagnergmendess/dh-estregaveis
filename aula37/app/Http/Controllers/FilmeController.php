<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FilmeController extends Controller{

    public function procurarFilmeId($id){
        $filme = Movie::find($id);

        $nome = $filme->title;

        return view('filme')->with('nomeDoFilme', $nome);
    }

    // public function procurarFilmeNome($filmeNome){
    //     $filme = Movie::where('title', '=', $filmeNome)->first();

    //     if($filme){
    //         $resultado = $filme->id ." ". $filme->title;
    //     }else{
    //         $resultado = "Filme não encontrado";
    //     }

    //     return view('filmeNome')->with('resultado', $resultado);
    // }

    public function procurarFilmeNome($filmeNome){
        $filme = Movie::where('title', 'LIKE', '%' .$filmeNome. '%')->get();

        return view('procurarNome')->with('filmes', $filme);
    }

    public function adicionarFilme($novoFilme){
        $filmes = [
                1 => "Toy Story",
                2 => "Procurando Nemo",
                3 => "Avatar",
                4 => "Star Wars: Episódio V",
                5 => "Up",
                6 => "Mary e Max"
            ];

        $adcFilme = "";

        foreach($filmes as $nome){
            if($novoFilme !== $nome){
                $filmes[] = $novoFilme;
                $adcFilme = "Filme adicionado com sucesso!";
            }else{
                $adcFilme = "Esse filme já existe";
            }
        }
        return view('filme')->with('adcFilme', $adcFilme);
    }


    public function listarFilmes(){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        return view('todosOsFilmes')->with('todosFilmes', $filmes);


    }


}
