<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
	protected $table = 'credito';

    protected $fillable = [
        'usuario', 'credito', 'reserva_carga', 'reserva_pago'
    ];
}
