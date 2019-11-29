<form action="{{ isset($empresa) ? route('empresas.admin.actualizar' , $empresa->id ) : '#' }}" method="post">
    @csrf

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 {{ title_case($empresa->nombre) }}
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

            

            <div class="form-group">
            	<button type="submit" class="btn btn-primary">Editar</button>
            </div>

        </div>
    </div>

</form>