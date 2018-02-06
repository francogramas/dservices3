@extends('layouts.superadmin')
@section('content')
{{ Form::model($especialidades, ['route' => ['especialidades.update',$especialidades->id],'method'=>'PUT']) }}
	<div class="row form-group">
		<div class="col-sm-8">
			<label for="">Especialidad</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="{{ $especialidades->nombre }}">
		</div>
		<div class="col-sm-2">
			<label for=""><br></label>	
			<input type="submit" class="btn btn-primary form-control" value="Actualizar">
		</div>
	</div>
{{ Form::close() }}
@stop