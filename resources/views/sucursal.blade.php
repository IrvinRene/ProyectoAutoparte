@extends('layouts.principal') 
 	@section('content') 
 	<div class="row">	
 		<div class="col-sm-8 col-sm-offset-2"> 
			<div class="panel-success">
			<div class="panel-heading strong">
			<h4 class="text-center">
				Sucursal
			</h4>	
			</div>
				<div class="panel-body">
					{!! Form::model($sucursal, $parametros['ruta']) !!}		
 			 		<div class="form-group">  
			 			<div class="col-sm-9">
			 				{!!Form::text('sucursal',null,['class'=>'form-control','placeholder'=>'Ingrese la sucursal'])!!} 
			 			</div>
			 				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
			 		</div>
			 	</div> 
 				<br>
 	{!!Form::close()!!} 
 			</div>
 		</div>
 	</div>
 	
 	<div class="col-sm-12">
			<h3 class="text-center">Sucursales</h3>
			<br>
			<div class="table-responsive">
			
				<table class="table table-bordered table-striped">
					<thead>
						<tr class="info">
							<th>SUCURSAL</th><th>EDITAR</th>
						</tr>
					</thead>
						
						<tbody>
						@foreach(App\Sucursal::all() as $sucursal)
						<tr class="text-center">
							    <td>{{$sucursal->sucursal}}</td>

							   <td>
									<a href="{{ route('sucursal.edit', $sucursal->id) }}" class="btn btn-success btn-sm"><i class="fa fa-btn fa-edit"></i>Editar</a>
								</td> 
								  
							</tr>		
						@endforeach
						</tbody>
				</table>
			</div>
	</div>
</div>

 	@endsection 