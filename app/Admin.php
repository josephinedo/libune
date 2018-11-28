<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{	
    protected $fillable = ['id', 'nombre', 'email', 'codigo'];

    public $timestamps = false;
}
