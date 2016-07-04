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
					
					{!! Form::model($piezaedit, $parametros['ruta']) !!}
					
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
							<div class="col-sm-3 control-label">Imagen</div>
							<div class="col-sm-7">
								<input type="file" name="imagen" id="imagen">
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

		
			</div>
		</div> 
	</div>
		
@endsection
