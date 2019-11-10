<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function empresas()
    {
    	return $this->all();
    }

    public function usuario()
    {
    	return $this->belongsTo(Usuario::class , 'id_usuario');
    }
}
