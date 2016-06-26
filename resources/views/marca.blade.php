
 @extends('layouts.principal') 
 	@section('content') 
	{!! Form::model($marca, $parametros['ruta']) !!}			

 		<div class="form-group">
 			<div class="col-sm-7"> 
 				{!!Form::label('marca','Marca:')!!}
 			</div>
 		</div>	
 		
 	
	 	
 		<div class="form-group">  
 			<div class="col-sm-7">
 				{!!Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la marca'])!!} 
 			</div>
 		</div> 
 	
 	
 	<br>

 	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
 	{!!Form::close()!!} 
 	@endsection 
