<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    protected $table = 'cinemacenter';

    public function empresa()
    {
    	return $this->belongsTo(Empresa::class , 'empresa_id');
    }
}
