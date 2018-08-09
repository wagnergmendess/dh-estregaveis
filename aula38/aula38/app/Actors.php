<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $table = "actors";

    protected $fillable = ['first_name', 'last_name', 'rating'];
}
