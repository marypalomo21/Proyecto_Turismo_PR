@extends('layouts.app')

@section('title', 'Registros Create')

@section('content')
					<h1>Registro</h1>
			<form class="form-group" method="POST" action="/registro" enctype="multipart/form-data">
				{{ csrf_field()}}
				<div class="jumbotron">
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-group col-md-6">
		<label for="">Nombre</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="">Apellido</label>
		<input type="text" name="apellido" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="">email</label>
		<input type="text"  name="correo" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="">De que lugar nos visitas?</label>
		<input type="text"  name="lugar" class="form-control">
	</div>
				<div class="form-group col-md-6">
    				<label for="">Comentario</label>
    				<input type="text" rows="3" name="comentario" class="form-control">
 				</div>
 				
				<button type="submit" class="btn btn-primary"> Guardar </button>
			</div>
			</form>


@endsection
