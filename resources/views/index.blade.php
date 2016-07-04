@extends('layouts.principal')

@section ('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides CAROUSEL <3.<3 by:Jeyci *_______*-->
  <div class="carousel-inner" role="listbox" style="font-family:AR DESTINE">
	   
	    <div class="item active">
	      <center>
	      	<img src="/carousel/c1.jpg" alt="FISC-2016">
	      </center>
	      <div class="carousel-caption">
	        <h1>Autopartes CarSolve</h1>
	      </div>
	    </div>

	    <div class="item">
	    <center>
	    	<img src="/carousel/c2.jpg" alt="FISC-2016">
		</center>
	      <div class="carousel-caption">
	        <h1>Autopartes CarSolve</h1>
	        <p>Contamos con gran variedad de repuestos y accesorios para su auto...</p>
	      </div>
	    </div>

	    <div class="item">
	      <center>
	      	<img src="/carousel/c3.jpg" alt="FISC-2016">
	      </center>
	      <div class="carousel-caption">
	        <h1>Autopartes CarSolve</h1>
	        <p>Con sucursales a lo largo de pais</p>
	      </div>
	    </div>

	    <div class="item">
	      <center><img src="/carousel/c4.jpg" alt="FISC-2016"></center>
	      <div class="carousel-caption">
	       <h1>Autopartes CarSolve</h1>
	        <p>Visitanos, estamos abiertos de lunes a sábado de 9:00 a.m. a 10:00 p.m.</p>
	      </div>
	    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop