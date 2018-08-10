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

    // A partir daqui

    public function exibirAtores(){
        $atores = Actors::all();
        return view('todosAtores')->with('atores', $atores);
    }

    public function editAtor($id){
        $ator = Actors::find($id);
        return view('editAtorForm')->with('ator', $ator);
    }

    public function deleteAtor($id){
        $ator = Actors::find($id);
        return view('deleteAtorForm')->with('ator', $ator);
    }

    public function updateAtor(Request $request, $id){
        $ator = Actors::find($id);
        $ator->first_name = $request->input('first_name');
        $ator->last_name = $request->input('last_name');
        $ator->rating = $request->input('rating');

        $sucesso = $ator->save();

        $todosatores = Actors::all();

        if($sucesso){
            return view('todosAtores')
                ->with('edicaoSucesso', true)
                ->with('atores', $todosatores);
        }else{
            view('todosAtores')
                ->with('edicaoSucesso', true)
                ->with('atores', $todosatores);
        }
    }

    public function deletedAtor($id){
        $ator = Actors::find($id);

        $ator->delete();

        return 'ator deletado com sucesso';

        $sucesso = $ator->delete();

        $todosators = Actors::all();

        if($sucesso){
            return view('todosAtores')
                ->with('edicaoSucesso', true)
                ->with('ator', $todosator);
        }else{
            view('todosAtores')
                ->with('edicaoSucesso', true)
                ->with('ator', $todosator);
        }
    }
}
