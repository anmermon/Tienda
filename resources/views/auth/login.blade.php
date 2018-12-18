@extends('tienda.template')

@section('content')
<div class="container  text-center ">
	<div class="page-header">
		<h1>Iniciar Sesión</h1><hr>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-offset-2 col-md-8 j">
			<div class="page">
				@include('tienda.partials.errors')
				<form class="" method="POST" action="/auth/login">
				    {!! csrf_field() !!}

				    <div class="form-group">
				        <label for="email">Email</label>
				        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
				    </div>

				    <div class="form-group">
				        <label for="password">Password</label>
				        <input class="form-control" type="password" name="password" id="password">
				    </div>

				    <div class="form-group">
				        <input type="checkbox" name="remember"> Remember Me
				    </div>

				    <div class="form-group">
				        <button class="btn btn-primary btn-block" type="submit">Login</button>
				    </div>
				</form>
			</div>
		</div>
	</div>

</div>
@stop