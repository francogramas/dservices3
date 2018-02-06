@extends('layouts.app')

@section('page_header')        
    <h1> <i class="voyager-list"></i> Solicitudes pendientes</h1> 
@stop

@section('content')
<style type="text/css" scoped="scoped">
    .fusion-button .button-3 .fusion-button-text, .fusion-button.button-3 i {
        olor:#ffffff;
        }
        .fusion-button.button-3 {
            border-width:0px;
            border-color:#ffffff;
            font-size: 7pt;
            }
        .fusion-button .button-3 .fusion-button-icon-divider{
            border-color:#ffffff;
            }
        .fusion-button.button-3:hover .fusion-button-text, .fusion-button.button-3:hover i,.fusion-button.button-3:focus .fusion-button-text, .fusion-button.button-3:focus i,.fusion-button.button-3:active .fusion-button-text, .fusion-button.button-3:active{
            color:#ffffff;
            }
        .fusion-button .button-3:hover, .fusion-button .button-3:focus, .fusion-button .button-3:active{
            border-width:0px;border-color:#ffffff;
            }
        .fusion-button.button-3:hover .fusion-button-icon-divider, .fusion-button.button-3:hover .fusion-button-icon-divider, .fusion-button.button-3:active .fusion-button-icon-divider{
            border-color:#ffffff;
            }
        .fusion-button.button-3{
            background: #3498db;
            }
        .fusion-button.button-3:hover,.button-3:focus,
        .fusion-button.button-3:active{
            background: #2980b9;
            }
        .fusion-button.button-3{
            width:auto;
        }
    </style>
    
     <form class="wpcf7-form" method="post" action="https://sandbox.gateway.payulatam.com/ppp-web-gateway/">
     	<div class="row">
     		<div class="col-sm-12">
     			<h2><span style="color:#ffffff; font-weight: bold;">Página de membresía</span></h2>
				<p>
					Tener una mebresía te permite tener tarifas preferenciales en todos los servicios ofertados por D'Services VIP, esta tiene una vigencia de un año y un valor de {{ $membresia->valor }}
				</p>
     		</div>
     	</div>
     	<div class="row">
     		<div class="col-sm-5">
     			<p>
     				<!-- Campos Ccultos -->
     				<input type="hidden" name="merchantId" value="508029">
     				<input type="hidden" name="referenceCode" value={{ 'DSVIPM'.$membresia->id }}>
     				<input type="hidden" name="description" value='Adqusición de membresía anual'>
     				<input type="hidden" name="amount" value={{ $membresia->valor }}>
     				<input type="hidden" name="tax" value="0">
     				<input type="hidden" name="taxReturnBase" value="0">
     				<input type="hidden" name="signature" value="{{hash('md5', '4Vj8eK4rloUd272L48hsrarnUA'.'~'.'508029'.'~'.'DSVIPM'.$membresia->id.'~'.$membresia->valor.'~'.'COP' )}}">
                    <input type="hidden" name="test" value="1"> 
     				<input type="hidden" name="accountId" value="512321">
     				<input type="hidden" name="currency" value="COP">
     				<input type="hidden" name="buyerFullName" value={{ $Usuario->name }}>
     				<input type="hidden" name="buyerEmail" value={{ $Usuario->email }}>
     				<input type="hidden" name="shippingAddress" value="No Aplica">
     				<input type="hidden" name="shippingCity" value='Sincelejo'>
     				<input type="hidden" name="shippingCountry" value='COL'>
                    <input type="hidden" name="telephone" value={{ $Usuario->phone }}>
                    <input name="responseUrl" type="hidden" value={{ url('pagosmembresiarespuesta') }} >
                    <input name="confirmationUrl" type="hidden" value={{ url('pagosmembresiaconfirmacion') }} >
     			</p>
     			
     			<!-- Campos Visibles -->
     			     			
     			<p>
     				<label for="">Nombres:</label>
     				{{ $Usuario->name }}     				
     			</p>
     			<p>
     				<label for="">Servicio/Producto</label>
     				Adquisición de membresía anual     				
     			</p>
     			<p>
     				<label for="">Valor</label>
     				{{ $membresia->valor }}
     			</p>
     			<p>
     				<input type="submit" value="Pagar con PayU" class="btn btn-primary btn-lg">
     			</p>
     		</div>
     		<div class="col-sm-4"></div>
     		<div class="col-sm-4"></div>
     	</div>
     </form>
@stop