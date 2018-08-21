<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Genres extends Model
{
    protected $table = "genres";

    public function getIsActive(){
        if($this->active == 1){
            return "Sim";
        }else{
            return "Não";
        }
    }

    public function filmes(){
        return $this->hasMany(Movie::class, 'genre_id', 'id'); 
        //primeiro destino depois origem, no caso, id é de genero e genre_id de filme -> pq é 1:N (1 genero p N filmes)
    }

}
