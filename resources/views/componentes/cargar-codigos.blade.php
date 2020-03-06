<form action="#" method="post">
    @csrf

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                 Seleccionar Empresa
            </h5>
            <!--<p class="m-b-0 text-muted">
                Empresa relacionada a la oferta
            </p>-->
        </div>

        <div class="card-body">
            
           

            <div class="form-group">
            		<label for="inputEmpresa">Empresa</label>
	                <select name="empresa_id" id="inputEmpresa" class="form-control" required>
	                	@foreach($empresas as $empresa)
	                		<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
	                	@endforeach
	                </select>
            </div>


        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="m-b-0">
                Códigos
            </h5>
        </div>

        <div class="card-body">
            
          
            <div class="form-group">
            		<label for="inputCodigos">Ingrese los códigos</label>
	               <textarea name="codigos" id="inputCodigos" cols="30" rows="10" class="form-control" required></textarea>
            </div>

            

            <div class="form-group">
            	<button type="submit" class="btn btn-primary">Cargar</button>
            </div>

        </div>
    </div>

</form>