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

    public function reservas()
    {
        return $this->hasMany(Reserva::class , 'usuario');
    }

    public function getReservas()
    {
        return Reserva::where('usuario' , $this->id)
                        ->join('ofertas' , 'reservas.oferta' , '=' , 'ofertas.id')
                        ->get();
    }

    public function nuevosUsuarios($month = null , $year = null)
    {
        $mes = $month == null ? date('m') : $month;
        $ano = $year == null ? date('Y') : $year;

        return $this->whereMonth('created_at' , $mes)
                    ->whereYear('created_at' , $ano)
                    ->count();
    }

    public function login($email , $clave)
    {
    	$user = $this->where('email' , $email)
    				->where('clave' , $clave)
    				->first();
        if($user != null){
            $user->saldo = $user->saldo();
        }

        return $user;
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
