@extends('layouts.principal')

@section('content')
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-success">
				
				<div class="panel-heading strong">
				Modelos
				</div>
				<div class="panel-body">
					
					@include('partials.errors')
					
					{!! Form::model($modelo, $parametros['ruta']) !!}
					
						<div class="form-group">
							<label class="col-sm-3 control-label">Modelos</label>
							<div class="col-sm-7">
								{!! Form::text('modelo', null, array('class' => 'form-control', 'placeholder' => 'nombre el modelo')) !!}
							</div>
						</div>	

						<div class="form-group">
							<label class="col-sm-3 control-label">Marca</label>
							<div class="col-sm-7">
								{!! Form::select('idmarca', App\Marcas::lists('marca', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	

                        <div class="form-group">
							<label class="col-sm-3 control-label">Año</label>
							<div class="col-sm-7">
								{!! Form::select('idagno', App\Agnos::lists('agno', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	

						<div class="form-group">
							<div class="col-sm-3 control-label">Motor</div>
							<div class="col-sm-7">
								{!! Form::select('idmotor', App\Motores::lists('motor', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>
						

						<div class="form-group">
							<div class="col-sm-7 col-sm-offset-3">
								<button type="submit" class="btn btn-primary">{{ $parametros['button'] }}</button>
								<br>
							</div>
						</div>
					{!! Form::close() !!}
				
				</div>
			</div>
		</div>

		<div class="col-sm-12">
			<h3 class="text-center">Modelos Registrados</h3>
			<br>
			<div class="table-responsive">
			{!! Form::open(['method' => 'GET','route' => 'modelo.index']) !!}
				<div class="form-group bg-info">
				<br>
					<div class="col-md-6">
						<label class="col-md-8">{!! Form::text('modelo1', null, array('class' => 'form-control', 'placeholder' => 'Escriba el nombre del modelo')) !!}</label>
							<button type="submit" class="btn btn-success">Buscar</button>		
					</div>
					<br><br><br>
				</div>	
			{!! Form::close() !!}
				<table class="table table-bordered table-striped">
					<thead>
						<tr class="info">
							<th>Modelo</th><th>Marca</th><th>Año</th><th>Motor</th><th>EDITAR</th><th>ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						@foreach($md as $modelo)
							
							<tr class="text-center">
							    <td>{{$modelo->modelo}}</td>
							    <td>{{$mrk = DB::table('marcas')->where('id', $modelo->idmarca)->pluck('marca')}}</td>
							    <td>{{$ag = DB::table('agnos')->where('id', $modelo->idagno)->pluck('agno')}}</td>
								<td>{{$u = DB::table('motores')->where('id', $modelo->idmotor)->pluck('motor')}}</td>
								<td>
									<a href="{{ route('modelo.edit', $modelo->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a>
								</td>
								<td>
									{!! Form::open(['method' => 'DELETE','route' => ['modelo.destroy', $modelo->id]]) !!}
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close fa-btn"></i>Eliminar</button>		
									{!! Form::close() !!}
								</td>								
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center">
					{!!str_replace('/?','?',$md->appends(Input::except('page'))->render())!!}
				</div>
			</div>
		</div> 
	</div>
		
@endsection
