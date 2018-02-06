<script type="text/javascript">
	$(document).ready(function() {
		$(".btnSolicitar").click(function(event) {
    		var _servicioscontratistas_id = $('input[type=hidden]', $(this).closest("div")).val();
    		var _nombre = $('label[class=nombre]', $(this).closest("div")).text();    		
    		var _contratista = $('label[class=contratista]', $(this).closest("div")).text();    		
    		$("#servicioContratista").val(_nombre);
    		$("#servicioscontratistas_id").val(_servicioscontratistas_id);
    		$("#contratista").val(_contratista);
    		$("#tablaServicios").empty();
    		$("#buscarServicio").val('');
			//console.log(_servicioscontratistas_id);
		});
	});
</script>
<div id="tablaServicios">
	@foreach ($servicioscontratistas as $servicioscontratista)
		<div class="col-sm-3">		
				<p>
					<h4><label for="" class="nombre">{{ $servicioscontratista->nombre.' ' }}</label>
					 {{ '$'.number_format(($servicioscontratista->tarifaparticular),2, '.', ',') }}</h4>
				</p>
				<p>
					<label for="" class="contratista">{{ $servicioscontratista->contratista }}</label>
				</p>												
				<p>
					{{ str_limit($servicioscontratista->descripcion,50,'...') }}		
				</p>
				<a href="#" class="btn btn-default a-btn-slide-text btnSolicitar"  title="Solicitar"><i class="fa fa-edit fa-lg"></i></a>
		</div>
	@endforeach
	</tbody>
</table>
</div>