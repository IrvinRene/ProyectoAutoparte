
@extends('layouts.principal')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-m-d-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Consulta</div>

				<div class="panel-body">
					{{--<div class="row">--}}
						¿Qué estás buscando? Ingresa tus datos ... <br>
						<form action="action_page.php">
													
									<div class"col-sm-4 form-group">
										<label>Marcas</label>
										<select name="modelos" class="form-control">
											<option value="Audi">A1</option>
											<option value="Audi">A3</option>
											<option value="Audi">A3 Quattro</option>
											<option value="Audi">A4</option>
										</select>
									</div>

									<div class"row">
								
									<div class"col-sm-4 form-group">
										<label>Modelos</label>
										<select name="modelos" class="form-control">
											<option value="Audi">Audi</option>
											<option value="BMW">BMW</option>
											<option value="Cadillac">Cadillac</option>
											<option value="Chevrolet">Chevrolet</option>
										</select>
									</div>
									
									<div class"col-sm-4 form-group">
										<label>Año</label>
										<select name="agnos" class="form-control">
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
										</select>
									</div>
									<div class="form-group{{ $errors->has('idrol') ? ' has-error' : '' }}">
								<label class="col-sm-3 control-label">Rol</label>
								<div class="col-sm-7">
									{!! Form::select('m', App\Marcas::lists('marca', 'id'), null, array('class' => 'form-control')) !!}
								</div>
							</div>
							</div>
						<br><br>
						<input class="Buscar" value="Buscar" type="submit">
						</form>
					{{--</div>--}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
