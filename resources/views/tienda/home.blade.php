@extends('tienda.template')

@section('content')

@include('tienda.partials.slider')
<div class="container text-center" style="margin-top: 30px">

	<div id="productos">

		@foreach($products as $producto)

			<div class="producto white-panel">
				<h3>{{ $producto -> name }}</h3><hr>
				<img src="{{ $producto -> image }}" width="200">
				<div class="producto-info panel">
					<p>{{ $producto -> extract }}</p>
					<h4><span class="label label-succes">Precio : S/. {{ number_format($producto -> price,2) }}</h4></span>
					<p>
						<a class="btn btn-success" href="{{ route('cart-add', $producto -> slug) }}"><i class="fa fa-cart-plus"></i> Lo quiero</a>
						<a class="btn btn-info" href="{{ route('product-detail', $producto -> slug) }}">Leer mas</a>

					</p>
				</div>

			</div>
		@endforeach

	</div>
</div>
@stop