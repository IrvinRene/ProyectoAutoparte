@extends('layouts.principal')

@section('content')
	
<div class="text center">
	<h3 align="center">Evaluación</h3>
		<div class="row">
			<div class="col-sm-8col-sm-offset-2">
				<div class="panel-success">
					<div class="panel-heading strong">
						<h4>
						<div class="quote">¿Como se siente usted utilizando este sitio?</div><br>
						{!!Form::model($evaluacion,$parametros['ruta'])!!}
						<div class="form-group">
							<label class="col-sm-3 control-label">Evaluación</label>
							<div class="col-sm-7">
								{!! Form::select('idopcion', App\Opciones::lists('opcion', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-3 control-label">Sucursal</label>
							<div class="col-sm-7">
								{!! Form::select('idsucursal', App\Sucursal::lists('sucursal', 'id'), null, array('class' => 'form-control')) !!}
							</div>
						</div>	
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Comentario</label>
							<div class="col-sm-7">
								{!! Form::textarea('comentario', null, array('class' => 'form-control')) !!}
							</div>
						</div>	
						<div class="form-group">
							<div class="col-sm-7 col-sm-offset-3">
								<button type="submit" class="btn btn-primary">{{ $parametros['button'] }}</button>
								<br>
							</div>
						</div>
						{!!Form::close()!!}
					</div>
					<div class="col-sm-12">
					<h3 class="text-center">Evaluaciones Almacenadas</h3>
					<table class="table table-bordered table-striped">
					<thead>
						<tr class="info">
							<th>SUCURSAL</th><th>EVALUACION</th><th>COMENTARIO</th><th>EDITAR</th>
						</tr>
					</thead>
						
						<tbody>
						@foreach(App\Evaluacion::all() as $ev)
						<tr class="text-center">
							    <td>{{$s=DB::table('sucursales')->where('id',$ev->idsucursal)->pluck('sucursal')}}</td>
							    <td>{{$e=DB::table('opciones')->where('id',$ev->idopcion)->pluck('opcion')}}</td>
							    <td>{{$ev->comentario}}</td>
							     <td>
									<a href="{{ route('evaluacion.edit', $ev->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a>
								</td> 
								 
							</tr>		
						@endforeach
						</tbody>
				</table>


				</div>
			</div>
		</div>
</div>
		

@endsection