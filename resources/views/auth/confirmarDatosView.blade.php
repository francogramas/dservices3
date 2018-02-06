@extends('layouts.app')

@section('content')

<div>
	<style type="text/css" scoped="scoped">
    </style>
    
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<div class="row  form-group">
	{!! Form::model($user, ['route' => ['confirmardatos.update',$user->id],'method'=>'PUT','class'=>'wpcf7-form']) !!}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Necesitamos que confirmes tus datos:</label>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Nombre y apellidos</label>
					{{ Form::text('name',$user->name,['id'=>'name','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Correo electrónico</label>
					{{ Form::email('email',$user->email,['id'=>'email','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Teléfono</label>
					{{ Form::tel('phone',$user->phone,['id'=>'phone','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Teléfono Fijo</label>
					{{ Form::tel('fijo',$user->fijo,['id'=>'fijo','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}
				</div>				
			</div>
			<div class="row">				
				<div class="col-sm-6">
					<label for="">Dirección</label>
					{{ Form::text('direccion',$user->direccion,['id'=>'direccion','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}

				</div>
				<div class="col-sm-6">
					<label for="">Tipo de Documento</label>
					{{ Form::select('tipodocumento_id',$tipodocumento,$user->tipodocumento_id,['id'=>'tipodocumento_id','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Documento</label>
					{{ Form::text('documento',$user->documento,['id'=>'documento','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}
				</div>
				<div class="col-sm-6">
					<label for="">Fecha de nacimiento</label>
					{{ Form::date('fechanacimiento',$user->fechanacimiento,['id'=>'fechanacimiento','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required']) }}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px;">Registrar</button>
				</div>
			</div>
		</div>
		<p>
			<div class="checkbox">
			    <label>
			      <input type="checkbox" required="required" value="terminos" name="terminos">Acepto los términos y condiciones de uso. Todos los datos suministrados son tratados de acuerdo la ley de Habeas Data, bajo el Decreto el 1377 de 2013
			    </label>
			</div>			
		</p>
	{{ Form::close() }}
	</div>
</div>

@stop