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
        
        <div class="card-body">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ isset($empresa) ? 'Editar' : 'Crear'}}</button>
            </div>
        </div>
    </div>

</form>