@extends('layouts.app')

@section('content')
{{  Form::open(['route' => 'solicitudes.store','method'=>'POST']) }}
<div class="row">
	<div class="col-sm-4">
		<div data-animationtype="fadeInUp" data-animationduration="0.2" data-animationoffset="100%"  style="margin-left: 5px; margin-top: 5px; margin-bottom: 30px; visibility: visible; animation-duration: 0.2s;">
			<div style="background-color:rgba(59,175,191,0.45);padding: 9% 7%;background-position:left top;" data-bg-url="">
				<div style="margin-top:0px;margin-bottom:0px;">
					<h3 data-fontsize="22" data-lineheight="48"><span style="color: #ffffff;"><i class="fa fa-info-circle"></i> {{ $servicioscontratistas->contratista }} </span></h3>
				</div>
				<div style="border-color:#3bafbf;border-top-width:4px;margin-left: auto;margin-right: auto;margin-top:5px;margin-bottom:25px;">
				</div>
				<div class="table-2">
					<table class="table">
						<tbody>									
							<tr>
								<td style="text-align: left;"><span style="color: #ffffff;"><strong>{{ $servicioscontratistas->nombre }}</strong></span></td>
							</tr>
							<tr>
								<td style="text-align: left;"><span style="color: #ffffff;"><strong> Tarifa VIP: {{  '$'.number_format(($servicioscontratistas->tarifaparticular-($servicioscontratistas->tarifaparticular*$Tmembresia->porcentaje/100)),2, '.', ',') }}</strong></span>
									{{ Form::hidden('valor',null,['id'=>'valor']) }}
									{{ Form::hidden('tarifas_id',null,['id'=>'tarifas_id']) }}
								</td>
							</tr>
							<tr>
								<td style="text-align: left;"><span style="color: #ffffff;"><strong> Tarifa Básica: {{  '$'.number_format(($servicioscontratistas->tarifaparticular-($servicioscontratistas->tarifaparticular*$Tbasica->porcentaje/100)),2, '.', ',') }}</strong></span></td>
							</tr>
							<tr>
								<td style="text-align: left;"><span style="color: #ffffff;"><strong> Tarifa Particular: {{  '$'.number_format(($servicioscontratistas->tarifaparticular),2, '.', ',') }}</strong></span></td>
							</tr>																						
							<tr>
								<td style="text-align: left;"><span style="color: #ffffff;"><strong>Dirección: </strong></span></td>
							</tr>											
						</tbody>
					</table>
				</div>						
			</div>
		</div>
	</div>
	<div class="col-sm-8">	
		<div class="row">
			<div class="col-sm-6 form-group">
				{{ Form::hidden('servicioscontratistas_id',$servicioscontratistas->id,['id'=>'servicioscontratistas_id']) }}
				<label for="" style="color: white; font-size: 2em; font-weight: bold;">Fecha deseada</label>
				{{ Form::date('fecha',null,['id'=>'fecha','class'=>'form-control', 'required']) }}
			</div>
			<div class="col-sm-6"></div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<label for="" style="color: white; font-size: 2em; font-weight: bold;">Hora deseada:</label>
				{{ Form::time('hora',null,['id'=>'hora','class'=>'form-control', 'required']) }}
			</div>
			<div class="col-sm-6"></div>					
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<input type="submit" class="btn btn-primary btn-lg form-control" value="Solicitar">
			</div>
			<div class="col-sm-6"></div>					
		</div>
	</div>
</div>				
{{ 	Form::close() }}
@stop
