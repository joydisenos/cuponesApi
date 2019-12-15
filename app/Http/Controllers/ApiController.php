<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
use App\Categoria;

class ApiController extends Controller
{
    public function ofertas()
    {
    	$limite = isset($_GET['limit']) && $_GET['limit'] != null ? $_GET['limit'] : 100;
        $categoria = isset($_GET['categoria']) && $_GET['categoria'] != null ? $_GET['categoria'] : null;

    	$ofertasRef = new Ofertas();
        $ofertas = $ofertasRef->ofertasActivas($limite);
        if($categoria != 'null' && $categoria != null)
        {
            $ofertas = $ofertas->where('categorias.link' , '=' , $categoria);
        }
        $ofertas = $ofertas->get();
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
}
