@extends('layouts.principal')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h2 class="text-center">Reporte</h2>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr class="info">
						<th>Pieza</th><th>Marca</th><th>Información Adicional</th><th>Cantidad</th><th>EDITAR</th><th>ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
					@foreach($repemp as $reporteemp)

						<tr class="text-center">
						    <td>{{$repemvpza = DB::table('piezas')->where('id', $reporteemp->idpieza)->pluck('pieza')}}</td>
						    <td>{{$repemppza = DB::table('piezas')->where('id', $reporteemp->idpieza)->pluck('marca')}}</td>
						    <td>{{$repemppza = DB::table('piezas')->where('id', $reporteemp->idpieza)->pluck('infoadicional')}}</td>
						   	<td>{{$reporteemp->cantidad}}</td>
							<td><a href="{{ route('reporteemp.edit', $reporteemp->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a></td>
							<td>
								{!! Form::open(['method' => 'DELETE','route' => ['reporteemp.destroy', $reporteemp->id]]) !!}
									<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close fa-btn"></i>Eliminar</button>		
								{!! Form::close() !!}
							</td>								
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
					{!!str_replace('/?','?',$repemp->appends(Input::except('page'))->render())!!}
			</div>
		</div>
	</div> 
</div>
		
@endsection