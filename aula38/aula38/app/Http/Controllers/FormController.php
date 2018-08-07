<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FormController extends Controller
{
    public function form(){
        return view('formFilmes');
    }

    public function validar (Request $request){
        $this->validate($request, [
            'title' => 'required',
            'classificacao' => 'numeric|min:1-max:10',
            'awards' => 'numeric|min:0',
            'length' => 'numeric|min:50',
            'dia' => 'numeric|min:1-max:31',
            'mes' => 'numeric|min:1-max:12',
            'ano' => 'numeric|min:1970-max:2018'
        ]);

        return view('todosOsFilmes')->with('request', $request);
    }
}
