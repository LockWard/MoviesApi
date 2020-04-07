<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable =["Titulo","Poster","Trailer,RelaseYear,Director"];
}
