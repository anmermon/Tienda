@extends('tienda.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>Carrito de compras</h1>
		</div>


<div class="table-cart">
	@if(count($cart))

		<p>
			<a class="btn btn-danger" href="{{ route('cart-trash') }}">Vaciar Carrito</a>
		</p>

		<div class="table-responsive">
			<table class="table table-striped table-hover table bordered">
				<thead>
					<tr>
						<th>imagen</th>				
						<th>producto</th>				
						<th>precio</th>				
						<th>cantidad</th>				
						<th>subtotal</th>				
						<th>quitar</th>				
					</tr>					
				</thead>
				<tbody>
					@foreach($cart as $item)
						<tr>
							<td><img src="{{ $item-> image }}"></td>
							<td>{{ $item->name }}</td>
							<td>S/.{{number_format($item-> price,2) }}</td>
							<td>
								<input type="number" 
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="producto_{{ $item->id }}"
								>
								<a href="#"
									class="btn btn-warning btn-update-item" 
									data-href="{{ route('cart-update', $item->slug) }}"
									data-id ="{{ $item->id }}"
								>

							Actualizar</a>
							</td>
							<td>S/.{{number_format($item->price * $item->quantity,2) }}</td>
							<td><a class="btn btn-danger" href="{{ route('cart-delete', $item-> slug) }}">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<hr>
			<h3>Total: s/. {{number_format( $total,2) }}</h3>
		</div>

		@else
			<h4>No hay productos en el Carrito :( </h4>
		@endif
		<hr>
		<p>
			<a class="btn btn-primary" href="{{ route('home') }}">Seguir Comprando</a>

			<a class="btn btn-success" href="{{ route('order-detail') }}">Continuar</a>

		</p>
</div>		
	</div>
@stop