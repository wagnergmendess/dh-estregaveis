<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";

    protected $fillable = ['title', 'rating', 'awards','length', 'release_date', 'genre_id'];

    public function getReleaseDate(){
        $release_date = new \Datetime($this->release_date);
        return $release_date->format('d/m/Y');
    }

    public function getReleaseDateToInput(){
        $release_date = new \Datetime($this->release_date);
        return $release_date->format('Y-m-d');
    }

    public function genero(){
        return $this->hasOne(Genres::class,'genre_id', 'id');
    }

    public function atoresListado(){
        return $this->belongsToMany(Actors::class,'actor_movie', 'movie_id', 'actor_id');
    }

}
