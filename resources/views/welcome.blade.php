@extends('layouts.principal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-off-set-1">
               <div class="jumbotron">
                    <h1><i class="fa fa-hand-peace-o fa-btn"></i> Bienvenido, {{ Auth::user()->nombre}} {{ Auth::user()->apellido}}!! </h1>
                    @if(\Hash::check('12345678', Auth::user()->password))
                        <center>
                            <div class="alert alert-danger alert-dismissable">
                                <h3>
                                    <strong><i class="fa fa-warning fa-btn"></i>Por seguridad recuerde cambiar su contraseña!!! </strong>
                                </h3>
                            </div>
                        </center>
                    @endif
                        
                </div>                    
            
            </div>
        </div>
    </div>
@stop