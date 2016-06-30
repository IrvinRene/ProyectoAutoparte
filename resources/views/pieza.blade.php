@extends('layouts.principal')

@section('content')
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-success">
				
				<div class="panel-heading strong">
				Piezas
				</div>
				<div class="panel-body">
					
					@include('partials.errors')
					
					{!! Form::model($pieza, $parametros['ruta']) !!}
					
						<div class="form-group">
							<label class="col-sm-3 control-label">Pieza</label>
							<div class="col-sm-7">
								{!! Form::text('pieza', null, array('class' => 'form-control', 'placeholder' => 'nombre de pieza')) !!}
							</div>
						</div>	

						
						<div class="form-group">
							<label class="col-sm-3 control-label">Serie</label>
							<div class="col-sm-7">
								{!! Form::text('serie', null, array('class' => 'form-control', 'placeholder' => 'serie de pieza')) !!}
							</div>
						</div>	


						<div class="form-group">
							<label class="col-sm-3 control-label">Marca</label>
							<div class="col-sm-7">
								{!! Form::text('marca', null, array('class' => 'form-control', 'placeholder' => 'ingrese marca de pieza')) !!}
							</div>
						</div>	


						<div class="form-group">
							<label class="col-sm-3 control-label">Información Adicional</label>
							<div class="col-sm-7">
								{!! Form::text('infoadicional', null, array('class' => 'form-control', 'placeholder' => 'Breve descripción')) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-3 control-label">Sucursal</div>
							<div class="col-sm-7">
								{!! Form::select('idsucursal', App\Sucursal::lists('sucursal', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-3 control-label">Modelo</div>
							<div class="col-sm-7">
								{!! Form::select('idmodelo', App\Modelo::lists('modelo', 'id'), null, array('class' => 'form-control')) !!}
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
			<h3 class="text-center">Piezas Almacenadas</h3>
			<br>
			<div class="table-responsive">
			{!! Form::open(['method' => 'GET','route' => 'pieza.index']) !!}
				<div class="form-group bg-info">
				<br>
					<div class="col-md-6">
						<label class="col-md-8">{!! Form::text('pieza1', null, array('class' => 'form-control', 'placeholder' => 'Escriba el nombre de la pieza')) !!}</label>
							<button type="submit" class="btn btn-success">Buscar</button>		
					</div>
					<br><br><br>
				</div>	
			{!! Form::close() !!}
				<table class="table table-bordered table-striped">
					<thead>
						<tr class="info">
							<th>PIEZA</th><th>SERIE</th><th>MARCA</th><th>EDITAR</th><th>ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pz as $pieza)
							
							<tr class="text-center">
							    <td>{{$pieza->pieza}}</td>
								<td>{{$pieza->serie}}</td>
								<td>{{$pieza->marca}}</td>
								{{--<td>{{$u = DB::table('modelos')->where('id', $pieza->idmodelo)->pluck('modelo')}}</td>--}}
								<td>
									<a href="{{ route('pieza.edit', $pieza->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a>
								</td>
								<td>
									{!! Form::open(['method' => 'DELETE','route' => ['pieza.destroy', $pieza->id]]) !!}
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close fa-btn"></i>Eliminar</button>		
									{!! Form::close() !!}
								</td>								
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center">
					{!!str_replace('/?','?',$pz->appends(Input::except('page'))->render())!!}
				</div>
			</div>
		</div> 
	</div>
		
@endsection
