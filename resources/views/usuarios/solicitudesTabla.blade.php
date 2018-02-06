<table class="table table-striped">			    		
	<tbody>
	@foreach ($servicioscontratistas as $servicioscontratista)
		<tr>
			<td>
				<p>
					<h4>{{ $servicioscontratista->nombre.' ' }} <i class="voyager-dollar"></i> {{ '$'.number_format(($servicioscontratista->tarifaparticular),2, '.', ',') }}</h4>
				</p>
				<p>
					{{ $servicioscontratista->contratista }}
				</p>												
				<p>
					{{ str_limit($servicioscontratista->descripcion,50,'...') }}		
				</p>
			</td>			
			<td>
				<a href={{ route('solicitudes.show',$servicioscontratista->id) }} class="btn btn-default a-btn-slide-text"  title="Solicitar"><i class="voyager-basket"></i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>