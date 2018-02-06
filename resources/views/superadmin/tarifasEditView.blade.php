@extends('layouts.superadmin')
@section('content')
{{  Form::model($tarifas, ['route' => ['tarifas.update',$tarifas->id],'method'=>'PUT']) }}
	<div class="row form-group">
		<div class="col-sm-4">
			<p>
				<label for="">Tarifa</label>
				{{ Form::text('nombre',$tarifas->nombre,['id'=>'nombre', 'required', 'class'=>'form-control']) }}
			</p>
			<p>
				<label for="">Procentaje</label>
				{{ Form::number('porcentaje',$tarifas->porcentaje,['id'=>'porcentaje', 'required', 'class'=>'form-control']) }}
			</p>
			<p>
				<input type="submit" value="Actualizar" class="btn btn-primary form-control" >
			</p>
		</div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
{{ Form::close() }}
@stop