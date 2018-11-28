<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id', 'titulo', 'autor', 'seccion', 'ejemplar', 'estado', 
    				'codigo', 'edicion'];
}
