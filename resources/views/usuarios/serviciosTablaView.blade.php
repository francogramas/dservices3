@foreach ($servicioscontratistas as $servicioscontratista)
	<div data-animationtype="fadeInUp" data-animationduration="0.2" data-animationoffset="100%" class="col-md-3" style="margin-left: 5px; margin-top: 5px; margin-bottom: 10px; visibility: visible; animation-duration: 0.2s;">
		<div class="fusion-column-wrapper" style="background-color:rgba(59,175,191,0.45);padding: 9% 7%;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
			<div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-three fusion-border-below-title" style="margin-top:0px;margin-bottom:0px;">
				<h4 class="title-heading-center" data-fontsize="22" data-lineheight="48"><span style="color: #ffffff;"><i class="fa fa-info-circle"></i> {{ $servicioscontratista->contratista }} </span></h4>
			</div>
		<div class="fusion-sep-clear"></div>
			<div class="fusion-separator fusion-full-width-sep sep-single sep-solid" style="border-color:#3bafbf;border-top-width:4px;margin-left: auto;margin-right: auto;margin-top:3px;"></div>
			<div class="table-3">
				<table width="100%">
					<tbody>
						<tr>
							<td style="text-align: left;"><span style="color: #ffffff; font-size: 14px;"><strong>{{ $servicioscontratista->nombre.' ' }}</strong></span></td>
						</tr>
						<tr>
							<td style="text-align: left;"><span style="color: #ffffff; font-size: 14px;"><strong>Tarifa VIP: {{ '$'.number_format(($servicioscontratista->tarifaparticular),2, '.', ',') }}</strong></span></td>
						</tr>																						
						<tr>
							<td style="text-align: left;"><span style="color: #ffffff; font-size: 14px;"><strong>Dirección: </strong></span></td>
						</tr>											
					</tbody>
				</table>
			</div>
			<div class="fusion-sep-clear"></div>
			<div class="fusion-separator fusion-full-width-sep sep-none" style="margin-left: auto;margin-right: auto;margin-top:10px;margin-bottom:10px;"></div>
			<div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-three fusion-border-below-title" style="margin-top:0px;margin-bottom:0px;">
				<a href={{ route('solicitudes.show',$servicioscontratista->id) }} style="width: 100%" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>Solicitar</a>
			</div>
			<div class="fusion-clearfix"></div>
		</div>
	</div>
	@endforeach