<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Ofertas extends Model
{
    protected $fillable = [
                            'titulo',
                            'oprecio',
                            'fprecio',
                            'rprecio',
                            'descuento',
                            'mreservas',
                            'destacada',
                            'caracteristicas',
                            'condiciones',
                            'detalle',
                            'fotos',
                            'slide',
                            'ofecha',
                            'cfecha',
                            'ciudad',
                            'reservas',
                            'reservasPagas',
                            'empresa',
                            'eubicacion',
                            'edetalles',
                            'etelefono',
                            'extra',
                            'guid',
                            'cletras',
                            'cinicio',
                            'cnumeros',
                            'vista',
                            'vencimiento',
                            'valida_desde',
                            'reservasAgotada',
                            'id_usuario',
                            'id_usuario_edit',
                            'stock',
                            'hide_discount',
                            'hide_pricebefore',
                            'is_2x1',
                            'cupon_completo',
                            'cargos_adm',
                            'proveedor',
                            'costo',
                            'condiciones_automaticas',
                            'variable'
    ];

    public function ofertas()
    {
        return $this->orderBy('id' , 'desc')->get();
    }

    public function ofertasActivas($limite)
    {
        return $this
                    ->orderBy('id' , 'desc')
                    ->limit($limite)
                    ->get();
    }

    public function categoriaRel()
    {
        return $this->hasMany(RelOfertasCategoria::class , 'id_oferta');
    }

    public function ofertasAdmin($categoria)
    {
        return $this->whereHas('categoriaRel' , function (Builder $query) use($categoria) {
                            $query->whereHas('categoria',function (Builder $query) use($categoria) {
                                    $query->where('link', $categoria);
                            });
                    })
                    ->orderBy('id' , 'desc')
                    ->get();
    }
}
