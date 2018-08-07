<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAtorController extends Controller
{
    public function atorForm(){
        return view('formAtor');
    }

    public function validarAtor (Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'rating' => 'numeric|min:0',
        ]);

        return view('atores')->with('request', $request);
    }
}
