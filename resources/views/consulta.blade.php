
@extends('layouts.principal')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-5 col-m-d-offset 5">
			<div class="panel panel-success">
				<div class="panel-heading bg-success">Consulta</div>

				<div class="panel-body">
					{{--<div class="row">--}}
						¿Qué estás buscando? Ingresa tus datos ... <br>
						{!! Form::open(['url' => 'Resultado', 'class' => 'form-horizontal']) !!}
						<form clas="form-horizontal">
									
							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-3 control-label">Marca</label>
								<div class="col-sm-7">
									{!! Form::select('marca', App\Marcas::lists('marca', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-3 control-label">Modelo</label>
								<div class="col-sm-7">
									{!! Form::select('modelo', App\Modelo::lists('modelo', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-3 control-label">Motor</label>
								<div class="col-sm-7">
									{!! Form::select('motor', App\Motores::lists('motor', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-3 control-label">Año</label>
								<div class="col-sm-7">
									{!! Form::select('agno', App\Agnos::lists('agno', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>

							<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-3 control-label">Pieza</label>
								<div class="col-sm-7">
									{!! Form::select('pieza', App\Pieza::lists('pieza', 'id'), null, array('class' => 'form-control')) !!}
								</div>
								<br></br>
							</div>

						<br><br>
						<div clas="form-group">
							<br><br>
							<div class="col-sm-offset-4 col-sm-6">
								<button class="bnt bnt-success" type="submit"> Buscar </button>
							</div>
						</div>
					</form>
						{!!Form::close()!!}		

					{{--</div>--}}
				</div>
			</div>
		</div>

		<div class="col-sm-7 col-m-d-offset-7">
			@if(isset($Marcas))
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Stock</th>
								<th>Sucursal</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $Marcas->marca }}</td>
								<td>{{ $Modelo->modelo }}</td>
								<td>{{ $Inventario->cantidad }}</td>
								<td>{{ $Sucursal->sucursal }}</td>
							</tr>
						</tbody>
					</table>
				@endif
		</div>
	</div>
</div>
@endsection
