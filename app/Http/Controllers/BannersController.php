<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class BannersController extends Controller
{
    public function banners()
    {
    	$categoriasRef = new Categoria();
    	$categorias = $categoriasRef->categoriasActivas();


    	return view('banners.banners' , compact('categorias'));
    }
}
