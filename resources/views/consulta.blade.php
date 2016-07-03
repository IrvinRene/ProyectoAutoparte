
@extends('layouts.principal')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-5 col-m-d-offset 5">
			<div class="panel panel-info">
				<div class="panel-heading"><big>Consulta</big></div>

				<div class="panel-body">
						<p > ¿Qué estás buscando? Ingresa tus datos ... <br> <br></p>
						{!! Form::open(['url' => 'Resultado', 'class' => 'form-horizontal']) !!}
						<form clas="form-horizontal">
									
							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label  class="col-sm-2 control-label"> <b>Marca</b></label>
								<div class="col-sm-10">
									{!! Form::select('marca', App\Marcas::lists('marca', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-2 control-label"><b>Modelo</b></label>
								<div class="col-sm-10">
									{!! Form::select('modelo', App\Modelo::lists('modelo', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-2 control-label"><b>Motor</b></label>
								<div class="col-sm-10">
									{!! Form::select('motor', App\Motores::lists('motor', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-2 control-label"><b>Año</b></label>
								<div class="col-sm-10">
									{!! Form::select('agno', App\Agnos::lists('agno', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-2 control-label"><b>Pieza</b></label>
								<div class="col-sm-10">
									{!! Form::select('pieza', App\Pieza::lists('pieza', 'id'), null, array('class' => 'form-control')) !!}
								</div>
								<br></br>
							</div>

						<br>
						<div clas="form-group">
							<div class="col-sm-offset-4 col-sm-6">
								<button class="bnt bnt-info" type="submit"> Buscar </button>
							</div>
						</div>
					</form>
						{!!Form::close()!!}	
				</div>
			</div>
		</div>

		<div class="col-sm-7 col-m-d-offset-7">
			@if(isset($Marcas))
					<table class="table table-bordered">
						<thead>
							<tr class="info">
								<th> Marca Auto </th>
								<th>Modelo</th>
								<th> <p align="center">Información Adicional</p>
									 <p align="center">(Pieza)</p>
								</th>
 								<th>Muestra</th>
								<th>Stock</th>
								<th>Sucursal</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="active">{{ $Marcas->marca }}</td>
								<td class="active">{{ $Modelo->modelo }}</td>
								<td class="active" align="center">{{ $Pieza->pieza}},<br>  
									{{ $Pieza->infoadicional }},<br> 
									<label><i>marca:</i></label> {{ $Pieza->marca }}
								</td>
 								<td class="active" align="center"> <img src="{{ url($Pieza->imagen)}}" class="img-thumbnail" alt="Cinque Terre" width="90px" height="90px">,  </td>
 								<td class="active" align="center">{{ $Inventario->cantidad }}</td>
								<td class="active">{{ $Sucursal->sucursal }}</td>
							</tr>
						</tbody>
					</table>
				@endif
		</div>
	</div>
</div>
@endsection
