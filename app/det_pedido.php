<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class det_pedido extends Model
{
    protected $fillable=['id','costo','id_plato','id_pedido'];
}
