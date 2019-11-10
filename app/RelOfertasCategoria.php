<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelOfertasCategoria extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::class , 'id_categoria');
    }
}
