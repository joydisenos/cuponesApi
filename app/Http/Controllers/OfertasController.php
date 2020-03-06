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
        $data = $request->except(['_token' , 'categorias']);

        $data['hide_discount'] = $request->hide_discount == null ? 0 : 1;
        $data['hide_pricebefore'] = $request->hide_pricebefore == null ? 0 : 1;
        $data['variable'] = $request->variable == null ? 0 : 1;
        $data['is_2x1'] = $request->is_2x1 == null ? 0 : 1;
        $data['destacada'] = $request->destacada == null ? 0 : 1;
        $data['cupon_completo'] = $request->cupon_completo == null ? 0 : 1;
        $data['cargos_adm'] = $request->cargos_adm == null ? 0 : 1;
        $data['proveedor'] = $request->proveedor == null ? 0 : 1;
        $data['reservasAgotada'] = $request->reservasAgotada == null ? 0 : 1;
        $data['agotada'] = $request->agotada == null ? 0 : 1;
        $data['ofecha'] = strtotime($request->ofecha);
        $data['cfecha'] = strtotime($request->cfecha);
        $data['vencimiento'] = strtotime($request->vencimiento);
        $data['valida_desde'] = strtotime($request->valida_desde);

        $data['fotos'] = serialize($request->fotos);
        $data['slide'] = serialize($request->slide);

        //borrar en produccion
        $data['ciudad'] = 1;
        $data['reservas'] = 0;
        $data['eubicacion'] = '';
        $data['edetalles'] = '';
        $data['etelefono'] = '';
        $data['extra'] = '';
        $data['guid'] = '';
        $data['cletras'] = '';
        $data['cinicio'] = 0;
        $data['cnumeros'] = 0;
        $data['vista'] = 0;
        $data['reservasAgotada'] = 0;

        $oferta = Ofertas::create($data);

        $oferta->sincronizarCategorias($request->categoriasSeleccionadas);
        
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
        $data = $request->except(['_token' , 'categoriasSeleccionadas']);
        $data['hide_discount'] = $request->hide_discount == null ? 0 : 1;
        $data['hide_pricebefore'] = $request->hide_pricebefore == null ? 0 : 1;
        $data['variable'] = $request->variable == null ? 0 : 1;
        $data['is_2x1'] = $request->is_2x1 == null ? 0 : 1;
        $data['destacada'] = $request->destacada == null ? 0 : 1;
        $data['cupon_completo'] = $request->cupon_completo == null ? 0 : 1;
        $data['cargos_adm'] = $request->cargos_adm == null ? 0 : 1;
        $data['proveedor'] = $request->proveedor == null ? 0 : 1;
        $data['reservasAgotada'] = $request->reservasAgotada == null ? 0 : 1;
        $data['agotada'] = $request->agotada == null ? 0 : 1;
        $data['ofecha'] = strtotime($request->ofecha);
        $data['cfecha'] = strtotime($request->cfecha);
        $data['vencimiento'] = strtotime($request->vencimiento);
        $data['valida_desde'] = strtotime($request->valida_desde);

        $data['fotos'] = serialize($request->fotos);
        $data['slide'] = serialize($request->slide);

        //borrar en produccion
        $data['ciudad'] = 1;
        $data['reservas'] = 0;
        $data['eubicacion'] = '';
        $data['edetalles'] = '';
        $data['etelefono'] = '';
        $data['extra'] = '';
        $data['guid'] = '';
        $data['cletras'] = '';
        $data['cinicio'] = 0;
        $data['cnumeros'] = 0;
        $data['vista'] = 0;

        $oferta = Ofertas::findOrFail($id);
        $oferta->update($data);

        $oferta->sincronizarCategorias($request->categoriasSeleccionadas);

        return redirect()->back()->with('status' , 'Cambios guardados');
    }
}
