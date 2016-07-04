<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ing. Sist. Inf. </title>

		<!-- Fuentes -->

	<link href='//fonts.googleapis.com/css?family=Paprika:400,300' rel='stylesheet' type='text/css'>
	<!-- bootstrap -->

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">


</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"> AutoPartes-ISI2016</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/') }}">Inicio</a></li>
					<li><a href="{{ url('nosotros') }}">Nosotros</a></li>
					<li><a href="{{ url('consulta') }}">Consulta</a></li>
					<li><a href="{{ url('evaluacion') }}">Evaluación</a></li>
					
					<li class="dropdown">
						  <a class="dropdown-toggle" type="button" data-toggle="dropdown">Admin
						  <span class="caret"></span></a>
						   <ul class="dropdown-menu">
							    <li><a href="#">Ingresar USUARIO</a></li> 
							    <li><a href="{{ url('sucursal') }}">Ingresar SUCURSAL</a></li>
							    <li><a href="{{ url('marca') }}">Ingresar MARCAS</a></li>
							    <li><a href="{{ url('modelo') }}">Ingresar MODELOS</a></li>
							    <li><a href="{{ url('pieza') }}">Ingresar PIEZAS</a></li>
							    <li><a href="{{ url('inventario') }}">Inventario</a></li>
						  </ul>
					</li>
					<li class="dropdown">
						 <a class="dropdown-toggle" type="button" data-toggle="dropdown">Reportes
						  <span class="caret"></span></a>
						  <ul class="dropdown-menu">
						    <li><a href="#">Reporte GENERAL</a></li> 
						    <li><a href="{{ url('reporteemp') }}">Reporte EMPRESARIAL</a></li>
						 </ul>
					</li>
				</ul>
					
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>

			</div>
			

			
					
		</div>
	</nav>
	<div class="container-fluid">
		@yield('content')
	</div>
	
	<footer class="footer">
      <div class="container-fluid">
        <center>
        <p class="text-muted foot-text">Universidad Tecnológica de Panamá - {{ date('Y') }} <br> Ingeniería en Sistemas de Información <br> &copy; Todos los Derechos Reservados</p> 
        </center>
      </div>
    </footer>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>
	<script src="dropdown.js"></script>
</body>
</html>