@extends('tienda.template')

@section('content')
<div class="container  text-center ">
	<div class="page-header">
		<h1>Registrate</h1><hr>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-offset-2 col-md-8 ">
			<div class="page">
				@include('tienda.partials.errors')
				

				<form method="POST" action="/auth/register">
				    {!! csrf_field() !!}

				    <div class="form-group">
				        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">
				    </div>


				    <div class="form-group">
				        <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Apellidos">
				    </div>

				     <div class="form-group">

				        <input class="form-control" type="text" name="user" value="{{ old('user') }}" placeholder="Nombre de Usuario">
				    </div>

				    <div class="form-group">

				        <input class="form-control" type="text" name="addres" value="{{ old('addres') }}" placeholder="Direccion">
				    </div>


				    <div class="form-group">

				        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
				    </div>

				    <div class="form-group">

				        <input class="form-control" type="password" name="password" placeholder="Password">
				    </div>

				    <div class="form-group">

				        <input class="form-control" type="password" name="password_confirmation" placeholder="Repetir Password">
				    </div>

				    <div class="form-group">
				        <button class="btn btn-primary btn-block" type="submit">Registrar</button>
				    </div>
				</form>
			</div>
		</div>
	</div>

</div>
@stop