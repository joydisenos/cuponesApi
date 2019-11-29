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

    public function editar($id)
    {
    	$usuario = Usuario::findOrFail($id);

    	return view('usuarios.editar' , compact('usuario'));
    }

    public function actualizar(Request $request , $id)
    {
    	$usuario = Usuario::findOrFail($id);
    	$usuario->nombre = $request->nombre;
    	$usuario->apellido = $request->apellido;
    	if($request->has('credito') && $request->credito > 0){
    		$usuario->credito += $request->credito;
    	}
    	if($request->has('clave')){
    		$usuario->clave = md5($request->clave);
    	}
    	$usuario->save();

    	return redirect()->route('usuarios.admin')->with('status' , 'Usuario Actualizado');
    }
}
