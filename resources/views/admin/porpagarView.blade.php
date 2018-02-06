@extends('layouts.admin')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-sm-7">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
			<h4><span class="texto">Solicitudes por pagar</h4>
				<div id="tablaSolicitudes">
					<table class="table">
						<thead>
							<tr>
								<td>								
								</td>
								<td class="texto"><b>Usuario</b></td>
								<td class="texto"><b>Servicio</td>
								<td class="texto"><b>Prestador</td>
								<td class="texto"><b>Fecha/hora</td>
							</tr>
						</thead>
						<tbody>
						@foreach ($solicitudes as $solicitud)
							<tr>
								<td>
									<a href="#" class="fusion-button button-flat fusion-button-round button-large button-custom button-10 SolicitudId"><span class="fa fa-edit fa-lg" aria-hidden="true"></span></a>
									<input type="hidden" value={{ $solicitud->id }}>								
								</td>
								<td class="texto1">{{ $solicitud->name }}</td>
								<td class="texto1">{{ $solicitud->servicio }}</td>
								<td class="texto1">{{ $solicitud->contratista }}</td>
								<td class="texto1">{{ $solicitud->fecha.' '.$solicitud->hora }}</td>							
							</tr>
						@endforeach					
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-4">
				<div id="detalleSolicitud"></div>
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-7"></div>
		</div>
</div>
@stop