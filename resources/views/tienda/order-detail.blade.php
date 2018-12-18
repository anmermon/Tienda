@extends('tienda.template')

@section('content')
 <div class="container text-center">
 	<div class="page-header">
 		<h1>Detalle del pedido</h1>
 	</div>
 	<div class="page">
 		<div class="table-responsive">
 			<h3>Datos del usuario</h3>
 			<table class="table table-striped table-hover table-bordered">
 					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " .Auth::user()->last_name}}</td></tr>
 					<tr><td>Usuario:</td><td>{{ Auth::user()->user}}</td></tr>
 					<tr><td>Correo:</td><td>{{ Auth::user()->email}}</td></tr>
 					<tr><td>direccion:</td><td>{{ Auth::user()->addres}}</td></tr>

 			</table>

 		</div>
 		<div class="table-responsive">
 			<h3>Datos del pedido</h3>

 			<table class="table table-striped table-hover table-bordered">
				<tr>
				<th>Imagen</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
				</tr>

				@foreach($cart as $item)
					<tr>
						<td><img class="img-order-detail" src="{{ $item -> image }}"></td>
						<td>{{ $item -> name }}</td>
						<td>s/.{{ $item -> price }}</td>
						<td>{{ $item -> quantity }}</td>
						<td>s/.{{ $item -> price * $item -> quantity }}</td>
					
					</tr>

				@endforeach

 			</table> <hr>

 			<h3>Total: S/. {{ $total }}</h3><hr>

 			<p>
 				<a href="{{ route('cart-show') }}" class="btn btn-primary">Regresar</a>
 				<a href="{{ route('payment') }}" class="btn btn-success">Pagar</a>


 			</p>

 		</div>
 		

 	</div>


 </div>

@stop