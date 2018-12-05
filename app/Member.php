<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['nombre', 'email', 'codigo'];

    public $timestamps = false;
}
