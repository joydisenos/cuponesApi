<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'oferta', 'adicional_id', 'usuario','estado','descargo','uso','tiempo','ciudad',
        'cid','guid','titulo','precio','codigo','url','vencimiento','cinemacenter','fechaPago','fechaUsado'
    ];

    public function reservas()
    {
    	return $this->all();
    }

    public function ofertaRel()
    {
    	return $this->belongsTo(Ofertas::class , 'oferta');
    }

    public function reservasTiempo($month = null , $year = null)
    {
    	$mes = $month == null ? date('m') : $month;
    	$ano = $year == null ? date('Y') : $year;
    	$dia = strtotime( "01/" . $mes . "/" . $ano);

    	return $this->where('tiempo' , '>=' , $dia)->count();
    }

    public function reservasPagasTiempo($month = null , $year = null)
    {
    	$mes = $month == null ? date('m') : $month;
    	$ano = $year == null ? date('Y') : $year;
    	$dia = strtotime( "01/" . $mes . "/" . $ano);

    	return $this->where('fechaPago' , '>=' , $dia)->count();
    }

    public function ingresos($month = null , $year = null)
    {
    	$mes = $month == null ? date('m') : $month;
    	$ano = $year == null ? date('Y') : $year;
    	$dia = strtotime( "01/" . $mes . "/" . $ano);
    	
    	return $this->where('fechaPago' , '>=' , $dia)->sum('precio');
    }
}
