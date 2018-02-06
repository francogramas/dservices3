@extends('layouts.app')
@section('content')

<style type="text/css" scoped="scoped">
    .fusion-button .button-3 .fusion-button-text, .fusion-button.button-3 i {
        color:#ffffff;
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
     		<div class="col-sm-4">
     			<p>
     				<!-- Campos Ccultos -->
     				<input type="hidden" name="merchantId" value="508029">
     				<input type="hidden" name="referenceCode" value={{ 'DSVIP'.$solicitudes->id }}>
     				<input type="hidden" name="description" value={{ $servicio->descripcion }}>
     				<input type="hidden" name="amount" value={{ $solicitudes->valor }}>
     				<input type="hidden" name="tax" value="0">
     				<input type="hidden" name="taxReturnBase" value="0">
     				<input type="hidden" name="signature" value="{{hash('md5', '4Vj8eK4rloUd272L48hsrarnUA'.'~'.'508029'.'~'.'DSVIP'.$solicitudes->id.'~'.$solicitudes->valor.'~'.'COP' )}}">
                    <input type="hidden" name="test" value="1"> 
     				<input type="hidden" name="accountId" value="512321">
     				<input type="hidden" name="currency" value="COP">
     				<input type="hidden" name="buyerFullName" value={{ $Usuario->name }}>
     				<input type="hidden" name="buyerEmail" value={{ $Usuario->email }}>
     				<input type="hidden" name="shippingAddress" value="No Aplica">
     				<input type="hidden" name="shippingCity" value='Sincelejo'>
     				<input type="hidden" name="shippingCountry" value='COL'>
                    <input type="hidden" name="telephone" value={{ $Usuario->phone }}>
                    <input name="responseUrl" type="hidden" value={{ url('pagosrespuesta') }} >
                    <input name="confirmationUrl" type="hidden" value={{ url('pagosconfirmacion') }} >
     			</p>
     			
     			<!-- Campos Visibles -->     			
     			<p>
     				<label for="">Nombres:</label>
     				{{ $Usuario->name }}     				
     			</p>
     			<p>
     				<label for="">Servicio/Producto</label>
     				{{ $servicio->nombre }}     				
     			</p>
     			<p>
     				<label for="">Valor</label>
     				{{ $solicitudes->valor }}
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