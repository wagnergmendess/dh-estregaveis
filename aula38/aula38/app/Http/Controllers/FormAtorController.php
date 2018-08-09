<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actors;

class FormAtorController extends Controller
{
    public function atorForm(){
        return view('formAtor');
    }

    public function validarAtor (Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'rating' => 'numeric|min:1|max:10'
        ]);

        $usuario = Actors::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'rating' =>$request->input('rating'),
        ]);

        if($usuario->save()){
            return 'Ator cadastrado com sucesso!';
        }else{
            return view('formAtor')->with('request', $request);
        }
    }
}
