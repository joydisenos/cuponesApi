<form action="{{ isset($usuario) ? route('usuarios.admin.actualizar' , $usuario->id ) : '#' }}" method="post">
    @csrf

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 {{ title_case($usuario->nombre) }} {{ title_case($usuario->apellido) }}
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            
            <div class="form-row">
            	<div class="form-group col-md-6">
	                <label for="inputNombre">Nombre</label>
	                <input type="text" class="form-control" name="nombre" id="inputNombre" value="{{ $usuario->nombre }}" placeholder="Nombre de usuario" required>
	            </div>

	            <div class="form-group col-md-6">
	                <label for="inputApellido">Apellido</label>
	                <input type="text" class="form-control" name="apellido" id="inputApellido" value="{{ $usuario->apellido }}" placeholder="Apellido de usuario" required>
	            </div>
            </div>

            <div class="form-group">
            		<label for="inputEmail">Email</label>
	                <input type="email" class="form-control" id="inputEmail" value="{{ $usuario->email }}" placeholder="Email" readonly>
            </div>

            <div class="form-group">
            		<label for="inputClave">Contraseña</label>
	                <input type="password" class="form-control" name="clave" id="inputClave" placeholder="Contraseña">
            </div>

            <div class="form-group">
            		<label for="inputMonto">Monto a acreditar - Crédito actual ${{ $usuario->credito }}</label>
	                <input type="number" class="form-control" name="credito" value="0" min="0" id="inputMonto" placeholder="Monto a acreditar">
            </div>

            <div class="form-group">
            		<label for="inputCupoints">Cupoints a acreditar - Cupoints actual #</label>
	                <input type="number" class="form-control" name="cupoint" value="0" min="0" id="inputCupoints" placeholder="Cupoints a acreditar">
            </div>

            <div class="form-group">
            	<button type="submit" class="btn btn-primary">Editar</button>
            </div>

        </div>
    </div>

</form>