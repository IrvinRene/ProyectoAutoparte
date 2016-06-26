<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>GITCE</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/sse.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{ url('/inicio') }}">GITCE</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      
	      <ul class="nav navbar-nav navbar-right">
				<li>
					<a href="{{ url('/') }}">Inicio</a>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Miembros <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="fondopanel"><a href="{{ url('/acerca') }}">Acerca de</a></li>
						<li class="fondopanel"><a href="{{ url('/grupinv') }}">Grupo de Investigación</a></li>
						<li class="fondopanel"><a href="{{ url('/lininv') }}">Líneas de Investigación</a></li>
					</ul>
				</li>
				<li>
					<a href="{{ url('/publicaciones') }}">Publicaciones</a>
				</li>
				<li>
					<a href="{{ url('/vernot') }}">Noticias</a>
				</li>
				<li>
					<a href="{{ url('/contact') }}">Contactenos</a>
				</li>
				<li>
					<a href="{{ url('/marca') }}">Marca</a>
				</li>
				
				
				@if (Auth::guest())
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar Sesión <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="fondopanel"><a href="{{ url('/auth/login') }}">Iniciar Sesión</a></li>
							<li class="fondopanel"><a href="{{ url('/registrarse') }}">Registrarse</a></li>
							
						</ul>
					</li>
					
				@else
					<li>
						<a href="{{ url('/agregpublic') }}">Agregar Publicacion</a>
					</li>
					<li>
						<a href="{{ url('/noticia') }}">Agregar Noticias</a>
					</li>
						<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
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
        <p class="text-muted foot-text">UTP Chiriquí - Laboratorio de Investigación y Desarrollo de Software - {{ date('Y') }} &copy; Todos los Derechos Reservados</p>
      </div>
    </footer>

	<!-- Scripts -->
	<script src="{{ url('assets/js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>	
	<script type="text/javascript">
		var baseurl='{{url("/")}}';
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip({
		  	placement: 'bottom'
		  })
		});
	</script>
</body>
</html>
