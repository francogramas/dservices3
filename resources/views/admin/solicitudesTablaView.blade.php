<script type="text/javascript">
	$(document).ready(function() {
		$(".SolicitudId").click(function(event) {
	    var _solicitud = $('input[type=hidden]', $(this).closest("td")).val();
	    $.get('/admin1/solicituddetalle/'+_solicitud, function(data) {
	        $("#detalleSolicitud").empty().html(data);       
	     }); 
	  });
	});
</script>

<table class="table">
	<thead>
		<tr>
			<td>
			</td>
			<td><b>Usuario</b></td>
			<td><b>Servicio</td>
			<td><b>Prestador</td>
			<td><b>Fecha/hora</td>
		</tr>
	</thead>
	<tbody>
	@foreach ($solicitudes as $solicitud)
		<tr>
			<td>
				<a href="#" class="fusion-button button-flat fusion-button-round button-large button-custom button-10 SolicitudId"><span class="fa fa-edit fa-lg" aria-hidden="true"></span></a>
				<input type="hidden" value={{ $solicitud->id }}>
			</td>
			<td>{{ $solicitud->name }}</td>
			<td>{{ $solicitud->servicio }}</td>
			<td>{{ $solicitud->contratista }}</td>
			<td>{{ $solicitud->fecha.' '.$solicitud->hora }}</td>			
		</tr>
	@endforeach	
	</tbody>
</table>