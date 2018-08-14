<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";

    protected $fillable = ['title', 'rating', 'awards','length', 'release_date'];

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

}
