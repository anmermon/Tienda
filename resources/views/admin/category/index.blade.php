@extends('admin.template')

@section('content')
<hr>
<div class="container text-center">
	<div class="page-header">
		<h2>
			Categorias <a href="{{ route('admin.category.create') }}" class="btn btn-warning">+ Categoria</a>
		</h2>
	</div>
		<div class="page">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Editar</th>
						<th>Eliminar</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Color</th>
					</tr>				
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>
								<a href="{{ route('admin.category.edit', $category) }}" class="btn btn-success">Editar</a>
							</td>
							<td>
								{!! Form::open(['route' => ['admin.category.destroy', $category]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        						{!! Form::close() !!}

							</td>
							<td>{{ $category -> name }}</td>
							<td>{{ $category -> description }}</td>
							<td>{{ $category -> color }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>



</div>
@stop