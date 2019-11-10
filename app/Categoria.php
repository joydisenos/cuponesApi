<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public static function categoriasActivas()
    {
        return Categoria::where('ghost' , 0)
                    ->where('padre' , null)
                    ->get();
    }

    public static function categoriasHijas($id)
    {
        return Categoria::where('ghost' , 0)
                    ->where('padre' , $id)
                    ->get();
    }
}
