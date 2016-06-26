@extends('app')

@section('content')
	

	<div class="row">
        <div class="col-md-6 col-md-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<i class="fa fa-sign-in fa-btn"></i>Iniciar Sesión
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => 'auth/login']) !!}					    

					    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					    	
						    <div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-at"></i></span>
							    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Institucional']) !!}							    
							</div>
							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
							    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
							    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
							</div>
						    @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fa fa-btn fa-sign-in"></i>Iniciar
                            </button>
                        </div>
					{!! Form::close() !!}
					
					
				</div>
				</div>
				
			</div>
		</div>
	</div>
@stop
