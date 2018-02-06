@extends('layouts.superadmin')
@section('content')
{{  Form::model($configuracion, ['route' => ['configuracion.update',$configuracion->id],'method'=>'PUT']) }}
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<div class="row">
	<div class="col-sm-8">
		<h3>Configuración general</h3>
		<div class="row form-group">
			<div class="col-sm-6">
				<label for="">Valor de Membresía</label>
				{{ Form::text('valor_tarifa',$configuracion->valor_tarifa,['id'=>'valor_tarifa', 'required', 'class'=>'form-control']) }}
			</div>
			<div class="col-sm-6">
				<label for="">Iva</label>
				{{ Form::text('iva',$configuracion->iva,['id'=>'iva', 'required', 'class'=>'form-control']) }}		
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-6">
				<label for="">Valor del porcentaje pago</label>
				{{ Form::text('valor_porcentaje_pago',$configuracion->valor_porcentaje_pago,['id'=>'valor_porcentaje_pago', 'required', 'class'=>'form-control']) }}
			</div>
			<div class="col-sm-6">
				<label for="">Valor fijo de pago</label>
				{{ Form::text('valor_fijo_pago',$configuracion->valor_fijo_pago,['id'=>'valor_fijo_pago', 'required', 'class'=>'form-control']) }}		
			</div>
		</div>
		<h4>Datos de PayU</h4>
		<div class="row form-group">
			<div class="col-sm-6">
				<label for="">merchantId</label>
				{{ Form::text('merchantId',$configuracion->merchantId,['id'=>'merchantId', 'required', 'class'=>'form-control']) }}		
			</div>
			<div class="col-sm-6">
				<label for="">signature</label>
				{{ Form::text('signature',$configuracion->signature,['id'=>'signature', 'required', 'class'=>'form-control']) }}		
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-6">
				<label for="">accountId</label>
				{{ Form::text('accountId',$configuracion->accountId,['id'=>'accountId', 'required', 'class'=>'form-control']) }}				
			</div>
			<div class="col-sm-6">
				<label for="">shippingCountry</label>
				{{ Form::text('shippingCountry',$configuracion->shippingCountry,['id'=>'shippingCountry', 'required', 'class'=>'form-control']) }}				
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-6">
				<label for=""><br></label>
				<input type="submit" value="Actualizar" class="btn btn-primary form-control">
			</div>
			<div class="col-sm-6">
				<label for=""></label>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<h3>Tarifas</h3>
		<table class="table"> 
			<thead>
				<tr>
					<th>Tarifa</th>
					<th>Procentaje</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tarifas as $tarifa)
					<tr>
						<td>{{ $tarifa->nombre }}</td>
						<td>{{ $tarifa->porcentaje.' %' }}</td>
						<td>
							<a href={{ route('tarifas.edit',$tarifa->id) }} class="btn btn-primary btn-xs"  title="Editar"><span class="fa fa-edit fa-lg" aria-hidden="true"></span></a>
						</td>
					</tr>	
				@endforeach				
			</tbody>
		</table>
	</div>
</div>

{{ Form::close() }}
@stop