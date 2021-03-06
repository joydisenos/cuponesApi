<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ofertas;
use App\Categoria;
use App\Usuario;
use App\Reserva;

class ApiController extends Controller
{
    public function ofertas()
    {
    	$limite = isset($_GET['limit']) && $_GET['limit'] != null ? $_GET['limit'] : 100;
        $categoria = isset($_GET['categoria']) && $_GET['categoria'] != null ? $_GET['categoria'] : null;

    	$ofertasRef = new Ofertas();
        $ofertas = $ofertasRef->ofertasActivas($limite , $categoria);
        foreach ($ofertas as $oferta) {
            $oferta->fotos = !empty(unserialize($oferta->fotos)) ? 'https://cuponesbuenosaires.com/fotos/n/' . unserialize($oferta->fotos)[0] : '';
            $oferta->slide = unserialize($oferta->slide);
            $oferta->empresaNombre = $oferta->empresaRel->nombre;
        }
        //dd($ofertas);
        return response()->json($ofertas);
    }

    public function getOferta($id)
    {
        $oferta = Ofertas::findOrFail($id);
        $oferta->fotos = !empty(unserialize($oferta->fotos)) ? 'https://cuponesbuenosaires.com/fotos/n/' . unserialize($oferta->fotos)[0] : '';
        $slides = unserialize($oferta->slide);
        if($slides != null){
                    foreach ($slides as $key => $slide) {
                        $slides[$key] = 'https://cuponesbuenosaires.com/fotos/n/' . $slide;
                    }
                }
        $oferta->slide = $slides;
        $oferta->empresaNombre = $oferta->empresaRel->nombre;
        $oferta->empresaDireccion = $oferta->empresaRel->direccion;

        return response()->json($oferta);
    }

    public function getReservasUser($userId)
    {
        $user = Usuario::findOrFail($userId);
        $reservas = $user->reservas;
        foreach ($reservas as $reserva) {
            $reserva->fotos = !empty(unserialize($reserva->ofertaRel->fotos)) ? 'https://cuponesbuenosaires.com/fotos/n/' . unserialize($reserva->ofertaRel->fotos)[0] : '';
        }

        return json_encode($reservas);
    }

    public function reservar()
    {
        $reservas = json_decode($_GET['items']);
        $tiempo = time();
        $transactionid = substr(str_shuffle(md5(time() + rand(0, 500) + rand(0, 500))), 0, 20);
        $guid = md5(time());
        //dd($reservas[0]);
        foreach ($reservas as $key => $reserva) {
            $data = [
                'oferta' => $reserva->id,
                'adicional_id' => null,
                'usuario' => $_GET['user'],
                'estado' => 3,
                'descargo' => 0,
                'uso' => 0,
                'tiempo' => $tiempo,
                'ciudad' => 1,
                'cid' => $guid,
                'guid' => $guid,
                'titulo' => $reserva->oferta,
                'precio' => $reserva->reserva,
                'codigo' => 'asdqwe',
                'url' => '',
                'vencimiento' => time(),
                'cinemacenter' => '',
                'fechaPago' => $tiempo

            ];

            Reserva::create($data);
        }

        $response = ['respuesta' => 'exitosa'];

        return json_encode($response);
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

    public function consultarUsuario()
    {
        $id = $_GET['id'];

        $user = Usuario::find($id);
        $user->saldo = $user->saldo();

        return response()->json($user);
    }
}
