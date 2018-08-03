<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $table = "actors";

    public function getNomeCompleto(){
        return $this->actors->first_name. " " .$this->actors->last_name;
    }
}
