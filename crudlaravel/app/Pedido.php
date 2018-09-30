<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = ['vianda_id','persona_id','fecha_solicitud', 'fecha_entrega'];
}
