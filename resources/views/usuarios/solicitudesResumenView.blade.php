@extends('layouts.app')

@section('page_header')        
    <h1> <i class="voyager-list"></i> Solicitudes pendientes</h1> 
@stop

@section('content')
<form class="wpcf7-form">
	<div class="row form-group">
		<div class="col-sm-10">		
					<table class="table">
						<tbody>
						@foreach ($solicitudes as $solicitud)
							<tr>				
								<td>
									<span style="font-size: 1.3em; color: #ffffff"><strong>{{ $solicitud->servicio }}</strong></span>
									<p>
										<span style="color: #ffffff"><i class="fa fa-calendar fa-lg"></i> {{ $solicitud->fecha.' '.$solicitud->hora.' ' }}/ {{ $solicitud->contratista.' ' }}</span> 
									</p>
								</td>									
								<td>
									@if ($solicitud->estadosolicitudes_id==6)
									<a href={{ route('pagos.show',Crypt::encrypt($solicitud->id)) }} class="btn btn-info btn-lg" title="Generar pago"><i class="fa fa-dollar fa-lg" ></i>Genear Pago</a>
									@else
										<span style="color: #ffffff">{{ $solicitud->estado }}</span>
									@endif
								</td>	
							</tr>
						@endforeach	
						</tbody>
					</table>	
		</div>
	</div>	
</form>
@stop