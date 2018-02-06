<script type="text/javascript">

  	$(document).ready(function() {
  		$("#btnCancelarOrden").click(function(event) {
  			var _motivocancelacion=$.trim($("#motivoCancelacion").val());
	  		$('#mensaje').empty();  			
  			if (_motivocancelacion.length>0){
	  			var _solicitud = $("#solicitudes_id").val();
	    		var token=$("input[name=_token]").val();

	  			$.ajax({
	  				url: '/admin1/admsolicitudes/'+_solicitud,
	      			headers:{'X-CSRF-TOKEN':token},  				
	  				type: 'PUT',
	  				dataType: 'json',
	  				data: {motivocancelacion: _motivocancelacion, estadosolicitudes_id:5},
	  			})
	  			.done(function() {
	  				$.get('/admin1/mostrarsolicitudes', function(data) {
	  					$('#tablaSolicitudes').empty().html(data);
	  				});
	  				$('#cancelarOrdenModal').modal('hide');
	  				$('#panelDetalle').empty();
	  				$('#motivoCancelacion').val('');
	  			})
	  			.fail(function() {
	  				$('#mensaje').empty();
	  				$('#mensaje').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button> No se pudo guardar la solicitud por problemas de conexión al servidor, por favor revise su conexión a internet e intente nuevamente.</div>');
	  			});
	  		}
	  		else
	  		{
	  			$('#mensaje').empty();
	  			$('#mensaje').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>Debe escribir el motivo de cancelación de la solicitud.</div>');
	  		}
  		});

  		//----------------------------------------------------------------------------------------------------------------------------------
  		$("#btnAgendar").click(function(event) {
	  		$('#mensajeAgenda').empty();  			
	  		var _solicitud = $("#solicitudes_id").val();	
	  		var _servicioscontratistas_id = $("#servicioscontratistas_id").val();
	  		var _fecha = $("#fecha").val();
	  		var _hora = $("#hora").val();
	    	var token=$("input[name=_token]").val();
	  		$.ajax({
	  			url: '/admin1/admsolicitudes/'+_solicitud,
	    		headers:{'X-CSRF-TOKEN':token},  				
	  			type: 'PUT',
	  			dataType: 'json',
	  			data: {servicioscontratistas_id:_servicioscontratistas_id, fecha:_fecha, hora:_hora, estadosolicitudes_id:6},
	  		})
	  		.done(function() {
	  			$.get('/admin1/mostrarsolicitudes', function(data) {
	  				$('#tablaSolicitudes').empty().html(data);
	  			});

	  			$('#generarOrdenModal').modal('hide');	
	  			$('#panelDetalle').empty();
	  		})
	  		.fail(function() {
	  			$('#mensajeAgenda').empty();
	  			$('#mensajeAgenda').html('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> times; </button> No se pudo guardar la solicitud por problemas de conexión al servidor, por favor revise su conexión a internet e intente nuevamente.</div>');
	  		});
  		});
//---------------------------------------------------------------------------------------------------------
  		$("#buscarServicio").keyup(function(event) {
  			$.get('/admin1/admservicioscontratistas?term='+$("#buscarServicio").val(), function(data) {
  				//console.log(data);
  				$("#busquedaServicio").empty().html(data); 
  			});
  		});
//---------------------------------------------------------------------------------------------------------		
	});
 </script>
{{ csrf_field() }}
<div id="panelDetalle">
	<div class="panel panel-primary">
	  <div class="panel-heading">Detalles y seguimiento de solicitud</div>
	  <div class="panel-body">
		<div class="form-group">
			<label for="">Usuario: </label>
			{{ $solicitudes->usuario }}
		</div>
		<div class="form-group">
			<label for="">Teléfono de contacto del usuario: </label>
			{{ $solicitudes->phone }}		
		</div>
		<div class="form-group">
			<label for="">Prestador de servicio: </label>
			{{ $solicitudes->contratista }}		
		</div>
		<div class="form-group">
			<label for="">Teléfono de contacto del prestador: </label>
			{{ $solicitudes->telefono }}				
		</div>
		<div class="form-group">
			<label for="">Servicio: </label>
			{{ $solicitudes->nombre }}
		</div>
		<div class="form-group">
			<label for="">Posible fecha: </label>
			{{ $solicitudes->fecha }}				
		</div>
		<div class="form-group">
			<label for="">Posible Hora: </label>
			{{ $solicitudes->hora }}
		</div>	
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6"><button id="btnCancelar" class="btn btn-warning form-control" title="Cancelar Orden" data-toggle="modal" data-target="#cancelarOrdenModal"><span class="glyphicon"></span>Cancelar Orden</button></div>
				<div class="col-sm-6"><button id="btngenerarOrden" class="btn btn-success form-control" title="Generar orden" data-toggle="modal" data-target="#generarOrdenModal"><span class="glyphicon"></span>Generar Orden</button></div>
			</div>
		</div>
	  </div>  
	</div>
</div>
<div>
	<input type="hidden" id="solicitudes_id" value={{ $solicitudes->id }}>
	<input type="hidden" id="servicioscontratistas_id" value={{ $solicitudes->servicioscontratistas_id }}>
</div>
<div class="modal fade" id="cancelarOrdenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header modal-header-warning">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h4 class="modal-title" id="myModalLabel">Cancelar Orden</h4>
			</div>
			<div class="modal-body">
				<div class="row from-group">
					<div class="col-sm-12">
						<textarea id="motivoCancelacion" cols="30" rows="5" class="form-control" placeholder="Escriba el motivo de cancelación"></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12" id="mensaje">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<button type="button" id="btnCancelarOrden" class="btn btn-warning form-control">Cancelar</button>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
<div class="modal fade" id="generarOrdenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header modal-header-success">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
				<h4 class="modal-title" id="myModalLabel">Generar Orden</h4>
			</div>
			<div class="modal-body">
				<div class="row form-group">
					<div class="col-sm-12">
						<label for="">Prestador del Servicio: </label>
						<label id="contratista" class="form-control">{{ $solicitudes->contratista }}</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label for="">Servicio: </label>
						<input id="servicioContratista" type="text" value="{{ $solicitudes->nombre }}">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label for="">Buscar servicio: </label>
						<input id="buscarServicio" type="text" placeholder="Parámetro de busqueda">
						<div class="form-group" id="busquedaServicio">
							
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-6">
						<label for="">Fecha:</label>
						<input type="date" id="fecha" class="datepicker" value="{{ $solicitudes->fecha }}">
					</div>
					<div class="col-sm-6">
						<label for="">Hora:</label>
						<input type="time" id="hora" value="{{ $solicitudes->hora }}">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12" id="mensajeAgenda">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<button class="btn btn-success form-control " id="btnAgendar">Agendar</button>
					</div>
				</div>
			</div>			
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>