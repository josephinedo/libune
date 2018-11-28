<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id', 'titulo', 'autor', 'cantidad', 'seccion', 'estado', 
    				'codigo', 'edicion'];
}
