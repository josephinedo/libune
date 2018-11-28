<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['id', 'nombre', 'apellido'];

    public $timestamps = false;

    //Relación muchos a muchos con Book
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
