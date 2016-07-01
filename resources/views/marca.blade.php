
 @extends('layouts.principal') 
 	@section('content') 
 	<div class="row">	
 		<div class="col-sm-8 col-sm-offset-2"> 
			<div class="panel-success">
			<div class="panel-heading strong">
			<h4 class="text-center">
				Marcas
			</h4>	
			</div>
				<div class="panel-body">
					{!! Form::model($marca, $parametros['ruta']) !!}		
 			 		<div class="form-group" >  
			 			<div class="col-sm-2">
			 				<label>Marca</label>
			 			</div> 
			 			<div class="col-sm-12">
			 				{!!Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la marca', 'maxlength' => '1000'])!!} 
			 			</div>
			 		</div>
			 			<br>
			 			<div>
			 				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
			 			</div>
			 				
			 		</div>
			 	</div> 
 				<br>
 	{!!Form::close()!!} 
 			</div>
 		</div>
 	</div>

 	<div class="col-sm-12">
			<h3 class="text-center">Marcas Almacenadas</h3>
			<br>
			<div class="table-responsive">
			{{--{!! Form::open(['method' => 'GET','route' => 'marca.index']) !!}
				
			{!! Form::close() !!}--}}

				<table class="table table-bordered table-striped">
					<thead>
						<tr class="info">
							<th>MARCA</th><th>EDITAR</th><th>ELIMINAR</th>
						</tr>
					</thead>
						
						<tbody>
						@foreach(App\Marcas::all() as $marca)
						<tr class="text-center">
							    <td>{{$marca->marca}}</td>

							     <td>
									<a href="{{ route('marca.edit', $marca->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a>
								</td> 
								 <td>
									{!! Form::open(['method' => 'DELETE','route' => ['marca.destroy', $marca->id]]) !!}
										<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close fa-btn"></i>Eliminar</button>		
									{!! Form::close() !!}
								</td>
							</tr>		
						@endforeach
						</tbody>
				</table>
			</div>
	</div>
</div>

 	@endsection 
