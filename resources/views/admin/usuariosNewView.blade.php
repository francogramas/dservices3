@extends('layouts.admin')

@section('content')

<div>
	<div class="row form-group">
		{{  Form::open(['route' =>'usuarios1.store','method'=>'POST']) }}	
		<div class="form-group">
			<label for="">Agregar nuevo usuario</label>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Nombre y apellidos</label>
					{{ Form::text('name',null,['id'=>'name','class'=>'form-control','required']) }}
					{{ Form::hidden('password',null,['id'=>'password']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Correo electrónico</label>
					{{ Form::email('email',null,['id'=>'email','class'=>'form-control','required']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Teléfono</label>
					{{ Form::tel('phone',null,['id'=>'phone','class'=>'form-control','required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Teléfono Fijo</label>
					{{ Form::tel('fijo',null,['id'=>'fijo','class'=>'form-control','required']) }}
				</div>				
			</div>
			<div class="row">				
				<div class="col-sm-6">
					<label for="">Dirección</label>
					{{ Form::text('direccion',null,['id'=>'direccion','class'=>'form-control','required']) }}

				</div>
				<div class="col-sm-6">
					<label for="">Tipo de Documento</label>
					{{ Form::select('tipodocumento_id',$tipodocumento,null,['id'=>'tipodocumento_id','class'=>'form-control']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Documento</label>
					{{ Form::text('documento',null,['id'=>'documento','class'=>'form-control','required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Fecha de nacimiento</label>
					{{ Form::date('fechanacimiento',null,['id'=>'fechanacimiento','class'=>'form-control','required']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px;">Registrar</button>
				</div>
			</div>
		</div>		
	{{ Form::close() }}
	</div>
</div>

@stop