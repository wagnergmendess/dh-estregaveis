<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actors;

class AtorController extends Controller
{
    public function directory(){
        $atores = Actors::orderBy('first_name')->get();

        return view('atores')->with('atores', $atores);
    }

    public function show($id){
        $ator = actors::where('actors.id', '=', $id)->get();

        return view('ator')->with('ator', $ator);
    }

    

}
