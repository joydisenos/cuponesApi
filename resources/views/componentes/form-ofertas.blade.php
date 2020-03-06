<form action="{{ isset($oferta) ? route('ofertas.actualizar' , $oferta->id ) : route('ofertas.registrar') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Empresa
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            
            <div class="form-group">
                <label for="inputEmpresa">Empresa</label>
                <select name="empresa" id="inputEmpresa" class="form-control js-select2">
                    <option value="">Seleccione una empresa</option>
                    @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}" {{ isset($oferta) && $oferta->empresa == $empresa->id ? 'selected' : '' }}>{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>

    
    <div class="card m-b-30">
    
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Oferta
                            </h5>
                            <p class="m-b-0 text-muted">
                                Datos de la oferta
                            </p>
                        </div>
                        <div class="card-body ">
                            

                            <div class="form-group">
                                <label for="inputTitulo">Título en Box</label>
                                <input type="text" class="form-control" id="inputTitulo" placeholder="Título de la oferta" value="{{ isset($oferta) ? $oferta->titulo : '' }}" name="titulo">
                            </div>

                            <div class="form-group">
                                <label for="inputdetalle">Título en Oferta</label>
                                <input type="text" name="detalle" class="form-control" id="inputdetalle"
                                       placeholder="Detalles" value="{{ isset($oferta) ? $oferta->detalle : '' }}">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputfprecio">Precio Ahora</label>
                                    <input type="number" class="form-control" id="inputfprecio" placeholder="Precio final" value="{{ isset($oferta) ? $oferta->fprecio : '' }}" name="fprecio">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputoprecio">Precio Antes</label>
                                    <input type="number" class="form-control" id="inputoprecio" placeholder="Precio oferta" value="{{ isset($oferta) ? $oferta->oprecio : '' }}" name="oprecio">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="inputrprecio">Precio Reserva</label>
                                    <input type="number" class="form-control" id="inputrprecio" placeholder="Precio oferta" value="{{ isset($oferta) ? $oferta->rprecio : '' }}" name="rprecio">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputdescuento">Descuento</label>
                                    <input type="number" class="form-control" id="inputdescuento" placeholder="Descuento" value="{{ isset($oferta) ? $oferta->descuento : '' }}" name="descuento">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputofecha">Fecha de Inicio</label>
                                    <input type="text" class="form-control js-datepicker" id="inputofecha" placeholder="Fecha de Inicio" value="{{ isset($oferta) ? date('m/d/Y' , $oferta->ofecha) : '' }}" name="ofecha">
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="inputcfecha">Fecha de Finalización</label>
                                    <input type="text" class="form-control js-datepicker" id="inputcfecha" placeholder="Fecha de Finalización" value="{{ isset($oferta) ? date('m/d/Y' , $oferta->cfecha) : '' }}" name="cfecha">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputvencimiento">Fecha de Vencimiento</label>
                                    <input type="text" class="form-control js-datepicker" id="inputvencimiento" placeholder="Fecha de Vencimiento" value="{{ isset($oferta) ? date('m/d/Y' , $oferta->vencimiento) : '' }}" name="vencimiento">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputvalida_desde">Válida desde</label>
                                    <input type="text" class="form-control js-datepicker" id="inputvalida_desde" placeholder="Fecha de Inicio" value="{{ isset($oferta) ? date('m/d/Y' , $oferta->valida_desde) : '' }}" name="valida_desde">
                                </div>
                                
                            </div>

                            
                        </div>

    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Opciones
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            
            <div class="form-row">
                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputHideDiscount" type="checkbox" name="hide_discount" {{ isset($oferta) && $oferta->hide_discount == 1 ? 'checked' : '' }} value="1">
                        <label for="inputHideDiscount">Ocultar Descuento %</label>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputhide_pricebefore" type="checkbox" name="hide_pricebefore" {{ isset($oferta) && $oferta->hide_pricebefore == 1 ? 'checked' : '' }} value="1">
                        <label for="inputhide_pricebefore">Ocultar Precio Antes</label>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputvariable" type="checkbox" name="variable" {{ isset($oferta) && $oferta->variable == 1 ? 'checked' : '' }} value="1">
                        <label for="inputvariable">El precio es Variable</label>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputis_2x1" type="checkbox" name="is_2x1" {{ isset($oferta) && $oferta->is_2x1 == 1 ? 'checked' : '' }} value="1">
                        <label for="inputis_2x1">Esta oferta es un 2x1</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputdestacada" type="checkbox" name="destacada" {{ isset($oferta) && $oferta->destacada == 1 ? 'checked' : '' }} value="1">
                        <label for="inputdestacada">Oferta Destacada</label>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputcupon_completo" type="checkbox" name="cupon_completo" {{ isset($oferta) && $oferta->cupon_completo == 1 ? 'checked' : '' }} value="1">
                        <label for="inputcupon_completo">Cupón completo</label>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputcargos_adm" type="checkbox" name="cargos_adm" {{ isset($oferta) && $oferta->cargos_adm == 1 ? 'checked' : '' }} value="1">
                        <label for="inputcargos_adm">Cargos Administrativos</label>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="tag-input">
                        <input id="inputproveedor" type="checkbox" name="proveedor" {{ isset($oferta) && $oferta->proveedor == 1 ? 'checked' : '' }} value="1">
                        <label for="inputproveedor">Proveedor</label>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Stock
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputStock">Stock del producto</label>
                    <input type="text" class="form-control" id="inputStock" placeholder="Stock del producto" value="{{ isset($oferta) ? $oferta->stock : '' }}" name="stock">
                </div>

                <div class="form-group col-md-3">
                   
                        <label for="inputmreservas">Máximo de cupones por persona</label>
                        <input type="text" class="form-control" id="inputmreservas" placeholder="Máximo de cupones por persona" value="{{ isset($oferta) ? $oferta->mreservas : '' }}" name="mreservas">
                    
                </div>

                <div class="form-group col-md-3">
                        <label for="inputAgotada">Oferta Agotada</label>
                        <input type="checkbox" class="form-control" id="inputAgotada" name="agotada" {{ isset($oferta) && $oferta->agotada == 1 ? 'checked' : '' }} >
                </div>

                <div class="form-group col-md-3">
                        <label for="inputreservasAgotada">Cantidad de cupones reservados</label>
                        <input type="text" class="form-control" id="inputreservasAgotada" placeholder="Cantidad de cupones reservados" value="{{ isset($oferta) ? $oferta->reservasAgotada : '' }}" name="reservasAgotada" readonly>
                </div>
            </div>

        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Categorías
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            @foreach(App\Categoria::categoriasActivas() as $categoria)
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="tag-input">
                        <input id="inputcategoria{{$categoria->id}}" name="categoriasSeleccionadas[]" value="{{ $categoria->id }}" type="checkbox" {{ $oferta->categoriaSeleccionada($categoria->id) == 1 ? 'checked' : '' }}>
                        <label for="inputcategoria{{$categoria->id}}">{{ $categoria->nombre }}</label>
                    </div>
                </div>

                <div class="form-group col-md-8">
                   
                        @foreach(App\Categoria::categoriasHijas($categoria->id) as $subCategoria)
                           
                                <div class="tag-input">
                                    <input id="inputcategoria{{$subCategoria->id}}" name="categoriasSeleccionadas[]" value="{{ $subCategoria->id }}" type="checkbox" {{ $oferta->categoriaSeleccionada($subCategoria->id) == 1 ? 'checked' : '' }}>
                                    <label for="inputcategoria{{$subCategoria->id}}">{{ $subCategoria->nombre }}</label>
                                </div>
                            
                        @endforeach
                    
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Fotos
            </h5>
            
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="inputFotos">Fotos</label>
                <input type="file" name="fotos" id="inputFotos" class="form-control">
            </div>

            <div class="form-group">
                <label for="inputSlide">Slide</label>
                <input type="file" name="slide" id="inputSlide" class="form-control">
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Categorías y Condiciones
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="inputCaracteristicas">Características</label>
                <textarea name="caracteristicas" id="inputCaracteristicas" class="tinymce" cols="30" rows="10">{{ isset($oferta) ? $oferta->caracteristicas : '' }}</textarea>
            </div>

            <div class="form-group">
                <label for="inputCondiciones">Condiciones</label>
                <textarea name="condiciones" id="inputCondiciones" class="tinymce" cols="30" rows="10">{{ isset($oferta) ? $oferta->condiciones : '' }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">{{ isset($oferta)? 'Guardar Oferta' : 'Crear Oferta'}}</button>
            </div>
        </div>
    </div>
</form>