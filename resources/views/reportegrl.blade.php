@extends('layouts.principal')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h2 class="text-center">Reporte General</h2>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr class="info">
						<th>Pieza</th><th>Marca</th><th>Información Adicional</th><th>Sucursal</th><th>Cantidad</th><th>EDITAR</th><th>ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
					@foreach($rpg as $inventario)

						<tr class="text-center">
						    <td>{{$rpgpza = DB::table('piezas')->where('id', $inventario->idpieza)->pluck('pieza')}}</td>
						    <td>{{$rpgpza = DB::table('piezas')->where('id', $inventario->idpieza)->pluck('marca')}}</td>
						    <td>{{$rpgpza = DB::table('piezas')->where('id', $inventario->idpieza)->pluck('infoadicional')}}</td>
						    <td>{{$rpgsuc = DB::table('sucursales')->where('id', $inventario->idsucursal)->pluck('sucursal')}}</td>
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
			






			<div class="text-center">
					{!!str_replace('/?','?',$rpg->appends(Input::except('page'))->render())!!}
			</div>
		</div>
	</div> 
</div>
		
@endsection
