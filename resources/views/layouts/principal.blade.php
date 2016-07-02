<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ing. Sist. Inf. </title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
				<a class="navbar-brand" href="#">AutoPartes-ISI2016</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Inicio</a></li>
					<li><a href="{{ url('nosotros') }}">Nosotros</a></li>
					<li><a href="{{ url('consulta') }}">Consulta</a></li>
					<li><a href="{{ url('evaluacion') }}">Evaluación</a></li>
					<li>
						  <button class="btn btn dropdown-toggle" type="button" data-toggle="dropdown">Admin
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><a href="#">Ingresar USUARIO</a></li> 
						    <li><a href="{{ url('sucursal') }}">Ingresar SUCURSAL</a></li>
						    <li><a href="{{ url('marca') }}">Ingresar MARCAS</a></li>
						    <li><a href="#">Ingresar MODELOS</a></li>
						    <li><a href="#">Ingresar PIEZAS</a></li>
						    <li><a href="#">Inventario</a></li>
						  </ul>
					</li>
					<li>
						 <button class="btn btn dropdown-toggle" type="button" data-toggle="dropdown">Reportes
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><a href="#">Reporte GENERAL</a></li> 
						    <li><a href="#">Reporte Empresarial</a></li>
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

	@yield('content')

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>