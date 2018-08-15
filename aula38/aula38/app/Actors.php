<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Actors extends Model
{
    protected $table = "actors";

    protected $fillable = ['first_name', 'last_name', 'rating'];

    public function filmeAtorListado(){
        return $this->belongsToMany(Movie::class,'actor_movie', 'actor_id', 'movie_id');
    }
}
