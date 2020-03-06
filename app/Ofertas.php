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
                            'agotada',
                            'condiciones_automaticas',
                            'variable'
    ];

    public function ofertas()
    {
        return $this->orderBy('id' , 'desc')->get();
    }

    public function empresaRel()
    {
        return $this->belongsTo(Empresa::class , 'empresa');
    }

    public function ofertasActivas($limite , $categoria)
    {
        $ofertas = Ofertas::selectRaw('ofertas.*')
                    ->orderBy('ofertas.id' , 'DESC')
                    ->where('ofertas.ofecha' , '<=' , time())
                    ->where('ofertas.cfecha' , '<' , time())
                    ->limit($limite);
        if($categoria != 'null' && $categoria != null)
        {
            $ofertas = $ofertas
            ->join('rel_ofertas_categorias' , 'rel_ofertas_categorias.id_oferta' , '=' , 'ofertas.id')
            ->join('categorias' , 'rel_ofertas_categorias.id_categoria' , '=' , 'categorias.id')
            ->where('categorias.link' , '=' , $categoria);
        }

        $ofertas = $ofertas->get();

        return $ofertas;
    }

    public function categoriaRel()
    {
        return $this->hasMany(RelOfertasCategoria::class , 'id_oferta');
    }

    public function sincronizarCategorias($categoriasInput)
    {
        $categorias = RelOfertasCategoria::where('id_oferta' , $this->id)->get();
        foreach ($categorias as $categoria) {
            $categoria->delete();
        }

        if($categoriasInput != null)
        {
            foreach ($categoriasInput as $cat) {
                RelOfertasCategoria::insert(['id_categoria' => $cat , 'id_oferta' => $this->id ]);
            }
        }
    }

    public function categoriaSeleccionada($categoriaId)
    {
        $categoria = RelOfertasCategoria::where('id_categoria' , $categoriaId)
                            ->where('id_oferta' , $this->id)
                            ->first();
        $response = $categoria == null ? 0 : 1;

        return $response;
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
