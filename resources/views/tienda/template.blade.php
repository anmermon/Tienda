<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Nora delivery')</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-JuAGGg3c8UPrWdf0N8ZPJyOHkACruI9+mbl0C+H6XSYOqv9xIdiUSKehRyA8jUol" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">


</head>
<body>

	@if(\Session::has('message'))
		@include('tienda.partials.message')
	@endif
	
	@include('tienda.partials.nav')

	
	@yield('content')

	@include('tienda.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>