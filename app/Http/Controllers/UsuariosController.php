<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    public function usuarios()
    {
    	$usuariosRef = new Usuario();
    	$usuarios = $usuariosRef->usuarios();

    	return view('usuarios.ver' , compact('usuarios'));
    }
}
