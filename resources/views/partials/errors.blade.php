@if(count($errors) > 0)
<div class="alert alert-danger">
	<p><i class="fa fa-warning fa-btn"></i>Proceda a corregir los siguientes errores:</p>
	<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
	</ul>
</div>
@endif