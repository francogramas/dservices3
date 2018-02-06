@extends('layouts.admin')

@section('content')
{{ Form::model($tiposervicios, ['route' => ['categorias.update',$tiposervicios->id],'method'=>'PUT']) }}

<div class="container">
	<div class="row  form-group">
		<div class="col-md-4">
			{{ Form::text('nombre',$tiposervicios->nombre,['id'=>'nombre','required'=>'required','placeholder'=>'Nueva categoría','class'=>'form-control']) }}			
		</div>
		<div class="col-md-2">
			<input type="submit" class="btn btn-primary form-control" value="Actualizar">			
		</div>		
	</div>
</div>
{{ Form::close() }}
@stop