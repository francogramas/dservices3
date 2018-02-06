@extends('layouts.admin')
@section('content')
	{{  Form::model($usuario, ['route' => ['admusuarios.update',$usuario->id],'method'=>'PUT']) }}

		<div class="form-group">
			<label for="">Agregar nuevo usuario</label>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Nombre y apellidos</label>
					{{ Form::text('namexa',$usuario->name,['id'=>'name','class'=>'form-control','required', 'readonly']) }}
					{{ Form::hidden('password',null,['id'=>'password']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Correo electrónico</label>
					{{ Form::email('emailxa',$usuario->email,['id'=>'email','class'=>'form-control','required', 'readonly']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Teléfono</label>
					{{ Form::tel('phone',$usuario->phone,['id'=>'phone','class'=>'form-control','required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Teléfono Fijo</label>
					{{ Form::tel('fijo',$usuario->fijo,['id'=>'fijo','class'=>'form-control','required']) }}
				</div>				
			</div>
			<div class="row">				
				<div class="col-sm-6">
					<label for="">Dirección</label>
					{{ Form::text('direccion',$usuario->direccion,['id'=>'direccion','class'=>'form-control','required']) }}

				</div>
				<div class="col-sm-6">
					<label for="">Tipo de Documento</label>
					{{ Form::select('tipodocumento_id',$tipodocumento,$usuario->tipodocumento_id,['id'=>'tipodocumento_id','class'=>'form-control']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Documento</label>
					{{ Form::text('documento',$usuario->documento,['id'=>'documento','class'=>'form-control','required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Fecha de nacimiento</label>
					{{ Form::date('fechanacimiento',$usuario->fechanacimiento,['id'=>'fechanacimiento','class'=>'form-control','required']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px;">Actualizar</button>
				</div>
			</div>
		</div>
	{{ Form::close() }}
@stop