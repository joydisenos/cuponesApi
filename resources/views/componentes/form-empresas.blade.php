<form action="{{ isset($empresa) ? route('empresas.admin.actualizar' , $empresa->id ) : '#' }}" method="post">
    @csrf

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 {{ isset($empresa) ? title_case($empresa->nombre) : 'Crear empresa'}}
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            
            <div class="form-row">
            	<div class="form-group col-md-12">
	                <label for="inputNombre">Nombre</label>
	                <input type="text" class="form-control" name="nombre" id="inputNombre" value="{{ $empresa->nombre }}" placeholder="Nombre de empresa" required>
	            </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="inputDireccion" value="{{ isset($empresa) ? $empresa->direccion : ''}}" placeholder="Dirección de empresa" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion2">Dirección 2</label>
                    <input type="text" class="form-control" name="direccion2" id="inputDireccion2" value="{{ isset($empresa) ? $empresa->direccion2 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion3">Dirección 3</label>
                    <input type="text" class="form-control" name="direccion3" id="inputDireccion3" value="{{ isset($empresa) ? $empresa->direccion3 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion4">Dirección 4</label>
                    <input type="text" class="form-control" name="direccion4" id="inputDireccion4" value="{{ isset($empresa) ? $empresa->direccion4 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion5">Dirección 5</label>
                    <input type="text" class="form-control" name="direccion5" id="inputDireccion5" value="{{ isset($empresa) ? $empresa->direccion5 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion6">Dirección 6</label>
                    <input type="text" class="form-control" name="direccion6" id="inputDireccion6" value="{{ isset($empresa) ? $empresa->direccion6 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion7">Dirección 7</label>
                    <input type="text" class="form-control" name="direccion7" id="inputDireccion7" value="{{ isset($empresa) ? $empresa->direccion7 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion8">Dirección 8</label>
                    <input type="text" class="form-control" name="direccion8" id="inputDireccion8" value="{{ isset($empresa) ? $empresa->direccion8 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion9">Dirección 9</label>
                    <input type="text" class="form-control" name="direccion9" id="inputDireccion9" value="{{ isset($empresa) ? $empresa->direccion9 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDireccion10">Dirección 10</label>
                    <input type="text" class="form-control" name="direccion10" id="inputDireccion10" value="{{ isset($empresa) ? $empresa->direccion10 : ''}}" placeholder="Dirección de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputContacto">Contacto</label>
                    <input type="text" class="form-control" name="contacto" id="inputContacto" value="{{ isset($empresa) ? $empresa->contacto : ''}}" placeholder="Contacto de empresa">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputResponsable">Responsable</label>
                    <input type="text" class="form-control" name="responsable" id="inputResponsable" value="{{ isset($empresa) ? $empresa->responsable : ''}}" placeholder="Responsable de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputTelefono">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="inputTelefono" value="{{ isset($empresa) ? $empresa->telefono : ''}}" placeholder="Teléfono de empresa">
                </div>
            </div>

        </div>
    </div>

     <div class="card m-b-30">
        <div class="card-header">
            <div class="m-b-0">
                Logotipo
            </div>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <img src="{{ $empresa == null || empty(unserialize($empresa->logo)) ? '' : 'https://cuponesbuenosaires.com/fotos/n/' . unserialize($empresa->logo)[0] }}" alt="">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputClave">Logotipo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
            </div>

            
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <div class="m-b-0">
                Datos de Usuario
            </div>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" name="email" id="inputEmail" value="{{ isset($empresa) ? $empresa->email : ''}}" placeholder="Email de acceso" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputClave">Clave</label>
                    <input type="text" class="form-control" name="clave" id="inputClave" value="{{ isset($empresa) ? $empresa->clave : ''}}" placeholder="Clave de acceso" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputWeb">Web</label>
                    <input type="text" class="form-control" name="web" id="inputWeb" value="{{ isset($empresa) ? $empresa->web : ''}}" placeholder="Web de Empresa" >
                </div>

                <div class="form-group col-md-6">
                    <label for="inputFacebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="inputFacebook" value="{{ isset($empresa) ? $empresa->facebook : ''}}" placeholder="Facebook de empresa">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTwitter">Twitter</label>
                    <input type="text" class="form-control" name="twitter" id="inputTwitter" value="{{ isset($empresa) ? $empresa->twitter : ''}}" placeholder="Twitter de Empresa" >
                </div>

                <div class="form-group col-md-6">
                    <label for="inputInstagram">Instagram</label>
                    <input type="text" class="form-control" name="instagram" id="inputInstagram" value="{{ isset($empresa) ? $empresa->instagram : ''}}" placeholder="Instagram de empresa">
                </div>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <div class="m-b-0">
                Localización
            </div>
        </div>
        <div class="card-body">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud1">Latitud 1</label>
                    <input type="text" class="form-control" name="lat" id="inputLatitud1" value="{{ isset($empresa) ? $empresa->lat : ''}}" placeholder="Latitud 1" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud1">Longitud 1</label>
                    <input type="text" class="form-control" name="lng" id="inputLongitud1" value="{{ isset($empresa) ? $empresa->lng : ''}}" placeholder="Longitud 1" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud2">Latitud 2</label>
                    <input type="text" class="form-control" name="lat2" id="inputLatitud2" value="{{ isset($empresa) ? $empresa->lat2 : ''}}" placeholder="Latitud 2" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud2">Longitud 2</label>
                    <input type="text" class="form-control" name="lng2" id="inputLongitud2" value="{{ isset($empresa) ? $empresa->lng2 : ''}}" placeholder="Longitud 2" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud3">Latitud 3</label>
                    <input type="text" class="form-control" name="lat3" id="inputLatitud3" value="{{ isset($empresa) ? $empresa->lat3 : ''}}" placeholder="Latitud 3" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud3">Longitud 3</label>
                    <input type="text" class="form-control" name="lng3" id="inputLongitud3" value="{{ isset($empresa) ? $empresa->lng3 : ''}}" placeholder="Longitud 3" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud3">Latitud 3</label>
                    <input type="text" class="form-control" name="lat3" id="inputLatitud3" value="{{ isset($empresa) ? $empresa->lat3 : ''}}" placeholder="Latitud 3" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud3">Longitud 3</label>
                    <input type="text" class="form-control" name="lng3" id="inputLongitud3" value="{{ isset($empresa) ? $empresa->lng3 : ''}}" placeholder="Longitud 3" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud4">Latitud 4</label>
                    <input type="text" class="form-control" name="lat4" id="inputLatitud4" value="{{ isset($empresa) ? $empresa->lat4 : ''}}" placeholder="Latitud 4" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud4">Longitud 4</label>
                    <input type="text" class="form-control" name="lng4" id="inputLongitud4" value="{{ isset($empresa) ? $empresa->lng4 : ''}}" placeholder="Longitud 4" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud5">Latitud 5</label>
                    <input type="text" class="form-control" name="lat5" id="inputLatitud5" value="{{ isset($empresa) ? $empresa->lat5 : ''}}" placeholder="Latitud 5" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud5">Longitud 5</label>
                    <input type="text" class="form-control" name="lng5" id="inputLongitud5" value="{{ isset($empresa) ? $empresa->lng5 : ''}}" placeholder="Longitud 5" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud6">Latitud 6</label>
                    <input type="text" class="form-control" name="lat6" id="inputLatitud6" value="{{ isset($empresa) ? $empresa->lat6 : ''}}" placeholder="Latitud 6" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud6">Longitud 6</label>
                    <input type="text" class="form-control" name="lng6" id="inputLongitud6" value="{{ isset($empresa) ? $empresa->lng6 : ''}}" placeholder="Longitud 6" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud7">Latitud 7</label>
                    <input type="text" class="form-control" name="lat7" id="inputLatitud7" value="{{ isset($empresa) ? $empresa->lat7 : ''}}" placeholder="Latitud 7" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud7">Longitud 7</label>
                    <input type="text" class="form-control" name="lng7" id="inputLongitud7" value="{{ isset($empresa) ? $empresa->lng7 : ''}}" placeholder="Longitud 7" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud8">Latitud 8</label>
                    <input type="text" class="form-control" name="lat8" id="inputLatitud8" value="{{ isset($empresa) ? $empresa->lat8 : ''}}" placeholder="Latitud 8" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud8">Longitud 8</label>
                    <input type="text" class="form-control" name="lng8" id="inputLongitud8" value="{{ isset($empresa) ? $empresa->lng8 : ''}}" placeholder="Longitud 8" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud9">Latitud 9</label>
                    <input type="text" class="form-control" name="lat9" id="inputLatitud9" value="{{ isset($empresa) ? $empresa->lat9 : ''}}" placeholder="Latitud 9" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud9">Longitud 9</label>
                    <input type="text" class="form-control" name="lng9" id="inputLongitud9" value="{{ isset($empresa) ? $empresa->lng9 : ''}}" placeholder="Longitud 9" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLatitud10">Latitud 10</label>
                    <input type="text" class="form-control" name="lat10" id="inputLatitud10" value="{{ isset($empresa) ? $empresa->lat10 : ''}}" placeholder="Latitud 10" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputLongitud10">Longitud 10</label>
                    <input type="text" class="form-control" name="lng10" id="inputLongitud10" value="{{ isset($empresa) ? $empresa->lng10 : ''}}" placeholder="Longitud 10" required>
                </div>
            </div>

        </div>
    </div>

    <div class="card m-b-30">
        
        <div class="card-body">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ isset($empresa) ? 'Editar' : 'Crear'}}</button>
            </div>
        </div>
    </div>

</form>