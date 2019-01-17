<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boletas extends Model
{
    //

    protected $fillable = ['numeroBoleta', 'tipoGasto', 'fecha','monto','motivo'];
}

