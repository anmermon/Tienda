@extends('tienda.template')

@section('content')

<div class="container text-center">

		<div class="card-header"> 
			<h3>Detalle del producto</h3>
		</div><hr>
		
		<div class="row">
			<div class="col-md-6">
					<div class="product-block">
					<img src="{{ $producto -> image }}"">
					</div>
			</div>

			<div class="col-md-6">
				<div class="product-block">
					<h3>{{ $producto -> name }}</h3>

					<div class="product-info panel" >
						<p>{{ $producto -> description }}</p>
						<p>Precio :{{ number_format($producto -> price,2) }}</p>
						<a class="btn btn-success btn-block" href="{{ route('cart-add', $producto -> slug) }}">Lo quiero</a>
					</div>
				</div>

	
			</div>
		</div><hr>


	<a class="btn btn-primary" href="{{ route('home')}}">Regresar</a><hr>
	

		

</div>
		
@stop