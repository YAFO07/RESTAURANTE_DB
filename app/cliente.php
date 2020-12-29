<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = ['id','nombre','direccion','telefono','email'];
}
