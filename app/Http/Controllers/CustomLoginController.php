<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Usuario;

class CustomLoginController extends Controller
{
    public function login(Request $request)
    {
    	$validatedData = $request->validate([
	        'email' => 'required|email',
	        'clave' => 'required',
	    ]);

    	$email = $request->email;
    	$clave = md5($request->clave);

    	$usuarioRef = new Usuario();

    	$user = $usuarioRef->login($email , $clave);

    	if($user != null){
    		Auth::login($user);
    		return redirect()->route('inicio')->with('status' , 'Bienvenido ' . title_case($user->nombre));
    	}else{
    		return redirect()->back()->with('status' , 'Usuario o contraseña inválida');
    	}


    }
}
