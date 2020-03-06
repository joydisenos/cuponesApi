<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Usuario;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function inicio()
    {
    	$ingresosRef = new Reserva();
    	$ingresos = $ingresosRef->ingresos();
    	$reservas = $ingresosRef->reservasTiempo();
    	$reservasPagas = $ingresosRef->reservasPagasTiempo();
        $reservasGrafico = '[]';

    	$usuariosRef = new Usuario();
    	$usuariosNuevos = $usuariosRef->nuevosUsuarios();

        return view('inicio' , compact('ingresos' , 'usuariosNuevos' , 'reservas' , 'reservasPagas' , 'reservasGrafico'));
    }
}
