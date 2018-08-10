<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = "genres";

    public function filmes(){
        return $this->hasMany(Movies::class, 'genre_id', 'id');
    }

}
