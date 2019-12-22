<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
use App\Categoria;
use App\Usuario;

class ApiController extends Controller
{
    public function ofertas()
    {
    	$limite = isset($_GET['limit']) && $_GET['limit'] != null ? $_GET['limit'] : 100;
        $categoria = isset($_GET['categoria']) && $_GET['categoria'] != null ? $_GET['categoria'] : null;

    	$ofertasRef = new Ofertas();
        $ofertas = $ofertasRef->ofertasActivas($limite , $categoria);
        //dd($ofertas);
        return response()->json($ofertas);
    }

    public function getOferta($id)
    {
        $oferta = Ofertas::findOrFail($id);

        return response()->json($oferta);
    }

    public function categorias()
    {
    	$categoriasRef = new Categoria();
    	$categorias = $categoriasRef->categoriasActivas();

    	return response()->json($categorias);
    }

    public function iniciarSesion()
    {
        $email = $_GET['email'];
        $clave = md5($_GET['clave']);

        $usuarioRef = new Usuario();
        $user = $usuarioRef->login($email , $clave);

        if($user == null)
        {
            return response()->json([
                'respuesta' => 'no autorizado'
            ]);
        }else{
            $user->respuesta = 'autorizado';
            return response()->json($user);
        }
    }
}
