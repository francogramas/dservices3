@extends('layouts.superadmin')
@section('content')
{{  Form::open(['route' => 'configuracion.store','method'=>'POST']) }}	

<h3>Configuración general</h3>
<div class="row form-group">
	<div class="col-sm-4">
		<label for="">Valor de Membresía</label>
		{{ Form::number('valor_tarifa',null,['id'=>'valor_tarifa', 'required', 'class'=>'form-control']) }}
	</div>
	<div class="col-sm-4">
		<label for="">Iva</label>
		{{ Form::number('iva',null,['id'=>'iva', 'required', 'class'=>'form-control']) }}		
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label for="">Valor del porcentaje pago</label>
		{{ Form::number('valor_porcentaje_pago',null,['id'=>'valor_porcentaje_pago', 'required', 'class'=>'form-control']) }}
	</div>
	<div class="col-sm-4">
		<label for="">Valor fijo de pago</label>
		{{ Form::number('valor_fijo_pago',null,['id'=>'valor_fijo_pago', 'required', 'class'=>'form-control']) }}		
	</div>
</div>
<h4>Datos de PayU</h4>
<div class="row form-group">
	<div class="col-sm-4">
		<label for="">merchantId</label>
		{{ Form::text('merchantId',null,['id'=>'merchantId', 'required', 'class'=>'form-control']) }}		
	</div>
	<div class="col-sm-4">
		<label for="">signature</label>
		{{ Form::text('signature',null,['id'=>'signature', 'required', 'class'=>'form-control']) }}		
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label for="">accountId</label>
		{{ Form::text('accountId',null,['id'=>'accountId', 'required', 'class'=>'form-control']) }}				
	</div>
	<div class="col-sm-4">
		<label for="">shippingCountry</label>
		{{ Form::text('shippingCountry',null,['id'=>'shippingCountry', 'required', 'class'=>'form-control']) }}				
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label for=""><br></label>
		<input type="submit" value="Guardar" class="btn btn-primary form-control">
	</div>
	<div class="col-sm-4">
		<label for=""></label>
	</div>
</div>
{{ Form::close() }}
@stop