@extends('layouts.principal')

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-success">
				
				<div class="panel-heading strong">
				Entrada/Salida del Inventario
				</div>
				<div class="panel-body">
					
					@include('partials.errors')
					
					{!! Form::model($inventario, $parametros['ruta']) !!}
					
					<div clas="form-group">
							<label class="col-sm-3 control-label">Marca</label>
							<div class="col-sm-7">
								{!! Form::select('marca', $marcas=App\Marcas::lists('marca', 'id'), null, array('class' => 'form-control'), ['id'=>'marcas']) !!}
								
							</div>
						</div>	
						<br><br><br>

						<div clas="form-group">
							<label class="col-sm-3 control-label">Año</label>
							<div class="col-sm-7">
								{!! Form::select('agno', App\Agnos::lists('agno', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	
						<br><br><br>

					
						<div clas="form-group">
							<label class="col-sm-3 control-label">Modelo</label>
							<div class="col-sm-7">
							
								{!! Form::select('modelos', App\Modelo::where('idmarca',  '1' )->where('idagno', '1')->lists('modelo','id'), null, array('class' => 'form-control'), ['id'=>'modelos']) !!}
								
							</div> 
						</div>	
					
						<br><br><br>

						<div class="form-group">
							<label class="col-sm-3 control-label">Proceso</label>
							<div class="col-sm-7">
								{!! Form::select(null, App\Procesos::lists('proceso', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>
						


						<div class="form-group">
							<label class="col-sm-3 control-label">Cantidad</label>
							<div class="col-sm-7">
								{!! Form::text('cantidad', null, array('class' => 'form-control', 'placeholder' => 'Cantidad de la pieza')) !!}
							</div>
						</div>	

						

                        <div class="form-group">
							<label class="col-sm-3 control-label">Pieza</label>
							<div class="col-sm-7">
								{!! Form::select('idpieza', App\Pieza::lists('pieza', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	

						<div class="form-group">
							<label class="col-sm-3 control-label">Marca de la Pieza</label>
							<div class="col-sm-7">
								{!! Form::select(null, App\Pieza::lists('marca', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	

						<div class="form-group">
							<label class="col-sm-3 control-label">Información Adicional</label>
							<div class="col-sm-7">
								{!! Form::select(null, App\Pieza::lists('infoadicional', 'id'), null, array('class' => 'form-control')) !!}
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
		<h2 class="text-center">Inventario</h2>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr class="info">
						<th>Pieza</th><th>Marca</th><th>Información Adicional</th><th>Sucursal</th><th>Cantidad</th><th>EDITAR</th><th>ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
					@foreach($inv as $inventario)

						<tr class="text-center">
						    <td>{{$invvpza = DB::table('piezas')->where('id', $inventario->idpieza)->pluck('pieza')}}</td>
						    <td>{{$invvpza = DB::table('piezas')->where('id', $inventario->idpieza)->pluck('marca')}}</td>
						    <td>{{$invvpza = DB::table('piezas')->where('id', $inventario->idpieza)->pluck('infoadicional')}}</td>
						    <td>{{$invsuc = DB::table('sucursales')->where('id', $inventario->idsucursal)->pluck('sucursal')}}</td>
							<td>{{$inventario->cantidad}}</td>
							<td><a href="{{ route('inventario.edit', $inventario->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a></td>
							<td>
								{!! Form::open(['method' => 'DELETE','route' => ['inventario.destroy', $inventario->id]]) !!}
									<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close fa-btn"></i>Eliminar</button>		
								{!! Form::close() !!}
							</td>								
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
					{!!str_replace('/?','?',$inv->appends(Input::except('page'))->render())!!}
			</div>
		</div>
	</div> 
</div>
		
@endsection
