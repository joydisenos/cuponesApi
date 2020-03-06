<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class CodigosController extends Controller
{
    public function codigos()
    {
    	$empresasRef = new Empresa();
    	$empresas = $empresasRef->empresas();


    	return view('codigos.codigos' , compact('empresas'));
    }

    public function cargar()
    {
    	$empresasRef = new Empresa();
    	$empresas = $empresasRef->empresas();

    	return view('codigos.cargar' , compact('empresas'));
    }
}
