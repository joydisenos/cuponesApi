<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	protected $fillable = [
		'nombre',
		'direccion',
		'contacto',
		'responsable',
		'direccion2',
		'direccion3',
		'direccion4',
		'direccion5',
		'direccion6',
		'direccion7',
		'direccion8',
		'direccion9',
		'direccion10',
		'telefono',
		'email',
		'clave',
		'web',
		'facebook',
		'twitter',
		'instagram',
		'impreso',
		'reservaxmail',
		'informacion',
		'logo',
		'fotos',
		'lat',
		'lng',
		'lat2',
		'lng2',
		'lat3',
		'lng3',
		'lat4',
		'lng4',
		'lat5',
		'lng5',
		'lat6',
		'lng6',
		'lat7',
		'lng7',
		'lat8',
		'lng8',
		'lat9',
		'lng9',
		'lat10',
		'lng10',
		'sucursal1',
		'sucursal2',
		'sucursal3',
		'sucursal4',
		'sucursal5',
		'sucursal6',
		'sucursal7',
		'sucursal8',
		'sucursal9',
		'sucursal10',
		'proveedor',
		'nombre_proveedor',
		'id_usuario',
		'cat',
		'wellcome_email',
	];
    public function empresas()
    {
    	return $this->all();
    }

    public function usuario()
    {
    	return $this->belongsTo(Usuario::class , 'id_usuario');
    }

    public function codigos()
    {
    	return $this->hasMany(Codigo::class , 'empresa_id');
    }
}
