<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    public function usuarios()
    {
    	return $this->all();
    }

    public function login($email , $clave)
    {
    	return $this->where('email' , $email)
    				->where('clave' , $clave)
    				->first();
    }

    public function saldo()
    {
        $id = $this->id;
        $saldo = DB::table('credito')
                        ->selectRaw('

                                SUM(
                                    case WHEN reserva_pago != 0 THEN (credito.credito * -1)
                                                                ELSE (credito.credito * 1)
                                                                END
                                ) as total_real 

                            ')
                        ->join('usuarios' , 'usuarios.id' , '=' , 'credito.usuario')
                        ->where('usuarios.id' , '=' , $id)
                        ->groupBy('credito.usuario')
                        ->first();
                        
        return empty($saldo->total_real) ? 0 : $saldo->total_real;
    }
}
