<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id', 'titulo', 'autor', 'seccion', 'ejemplar', 'estado', 
    				'codigo', 'edicion'];

    public function autores()
    {
        //Relación muchos a muchos entre Materia y Alumno
        return $this->belongsToMany(Autor::class);
    }
}
