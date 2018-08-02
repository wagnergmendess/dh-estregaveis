<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller{

    public function procurarFilmeId($id){
        $filmes = [
                1 => "Toy Story",
                2 => "Procurando Nemo",
                3 => "Avatar",
                4 => "Star Wars: Episódio V",
                5 => "Up",
                6 => "Mary e Max"
            ];

            $nome = $filmes[$id];

        return view('filme')->with('nomeDoFilme', $nome);
    }

    public function procurarFilmeNome($filmeNome){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];

        $resultado = "";

        foreach($filmes as $nome){
            if($nome == $filmeNome){
                $resultado = $nome;
                break;
            }else{
                $resultado = "Não foram encontrados resultados";
            }
        }
        return view('filme')->with('resultado', $resultado);
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
