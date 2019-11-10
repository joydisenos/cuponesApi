<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function reservas()
    {
    	return $this->all();
    }
}
