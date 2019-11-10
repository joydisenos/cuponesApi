<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
use App\Empresa;

class OfertasController extends Controller
{
    public function ofertas()
    {
        $ofertasRef = new Ofertas();
        $ofertas = $ofertasRef->ofertas();

        return view('ofertas.ofertas' , compact('ofertas'));
    }

    public function ofertasCategoria($categoria)
    {
        $ofertasRef = new Ofertas();
        $ofertas = $ofertasRef->ofertasAdmin($categoria);

        return view('ofertas.ofertas' , compact('ofertas','categoria'));
    }

    public function crearOferta()
    {
        $empresasRef = new Empresa();
        $empresas = $empresasRef->empresas();

        return view('ofertas.crear' , compact('empresas'));
    }

    public function registrarOferta(Request $request)
    {
        $request->all();

        $oferta = Ofertas::create($data);
        
        return redirect()->route('ofertas.admin')->with('status' , 'Oferta Creada');
    }

    public function editarOferta($id)
    {
        $oferta = Ofertas::findOrFail($id);
        $empresasRef = new Empresa();
        $empresas = $empresasRef->empresas();

        return view('ofertas.editar' , compact('oferta' , 'empresas'));
    }

    public function actualizarOferta($id , Request $request)
    {
        $datos = $request->all();

        $oferta = Ofertas::findOrFail($id);
        $oferta->update($datos);

        return redirect()->back()->with('status' , 'Cambios guardados');
    }
}
