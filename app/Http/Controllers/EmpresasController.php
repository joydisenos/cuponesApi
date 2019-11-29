<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresasController extends Controller
{
    public function empresas()
    {
    	$empresasRef = new Empresa();
    	$empresas = $empresasRef->empresas();

    	return view('empresas.ver' , compact('empresas'));
    }

    public function editar($id)
    {
    	$empresa = Empresa::findOrFail($id);

    	return view('empresas.editar' , compact('empresa'));
    }
}
