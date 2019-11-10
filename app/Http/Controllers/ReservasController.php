<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;

class ReservasController extends Controller
{
    public function reservas()
    {
    	$reservasRef = new Reserva();
    	$reservas = $reservasRef->reservas();

    	return view('reservas.ver' , compact('reservas'));
    }
}
