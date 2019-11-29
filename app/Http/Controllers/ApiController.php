<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
use App\Categoria;

class ApiController extends Controller
{
    public function ofertas()
    {
    	$limite = isset($_GET['limit']) ? $_GET['limit'] : 100;

    	$ofertasRef = new Ofertas();
        $ofertas = $ofertasRef->ofertasActivas($limite);

        return response()->json($ofertas);
    }

    public function categorias()
    {
    	$categoriasRef = new Categoria();
    	$categorias = $categoriasRef->categoriasActivas();

    	return response()->json($categorias);
    }
}
