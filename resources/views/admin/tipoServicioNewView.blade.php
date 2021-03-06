@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row  form-group">
		{{  Form::open(['route' => 'categorias.store','method'=>'POST']) }}		
			<div class="col-md-4">
				{{ Form::text('nombre',null,['id'=>'nombre','required'=>'required','placeholder'=>'Nueva categoría','class'=>'form-control']) }}			
			</div>
			<div class="col-md-2">
				<input type="submit" class="btn btn-primary form-control" value="Crear">			
			</div>
		{{ Form::close() }}

		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<td><span style="font-weight: bold; font-size: 1.2em;"><strong>Categoría</strong></span></td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				@foreach ($tiposervicios as $tiposervicio)
					{{-- expr --}}
					<tr>
						<td>{{ $tiposervicio->nombre }}</td>
						<td>
														    						
							{{ Form::open(['route' => ['categorias.destroy',$tiposervicio->id],'method'=>'DELETE']) }}
								<a href={{ route('categorias.show',$tiposervicio->id) }} class="btn btn-primary btn-xs" title="Editar">
									   <span class="fa fa-edit" aria-hidden="true"></span>            
								</a>
							  	<button type="submit" class="btn btn-xs btn-danger" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true"></span>
							    </button>
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach					
				</tbody>
			</table>
		</div>
	</div>
	<div class="row  form-group">
		<div class="col-md-2"></div>
		<div class="col-md-6">
		</div>
	</div>
</div>
@stop