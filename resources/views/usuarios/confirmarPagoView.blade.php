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
    <div class="row">
        <div class="col-sm-8">            
            @if (strtoupper($firma)==strtoupper($firmacreada))
                Estimado {{ Auth::user()->name }} el estado de su pago es: @if($respuesta->transactionState==4)
                    {{ 'Aprobado' }}
                @elseif($respuesta->transactionState==5)
                    {{ 'Expirada' }}
                @elseif($respuesta->transactionState==6)
                    {{ 'Rechazado' }}
                @elseif($respuesta->transactionState==7)
                    {{ 'Pendiente' }}
                @elseif($respuesta->transactionState==104 )
                    {{ 'Se generó un error' }}
                @else
                    {{ $respuesta->message }}
                @endif
            @else
                Las firmas no corresponden
            @endif     
            <div>
            <span style="color: #ffffff; font-weight: bold;">Resumen Transacción</span>
            <table class="table">
                <tr>
                    <td>ID de la transaccion</td>
                    <td>
                        {{ $respuesta->transactionId }}
                    </td>
                </tr>
                <tr>
                    <td>Referencia de la venta</td>
                    <td> {{ $respuesta->reference_pol }} </td> 
                </tr>
                <tr>
                    <td>Referencia de la transaccion</td>
                    <td>
                        {{ $respuesta->referenceCode }}
                    </td>
                </tr>
                <tr>
                    @if($respuesta->pseBank) 
                        <tr>
                        <td>CUS</td>
                        <td>{{ $respuesta->cus }}</td>
                        </tr>
                        <tr>
                        <td>Banco </td>
                        <td> {{ $respuesta->pseBank }}</td>
                        </tr>
                    @endif
                <tr>
                    <td>Valor total</td>
                    <td>{{ '$'.number_format(($respuesta->TX_VALUE),2, '.', ',') }}</td>
                </tr>
                <tr>
                    <td>Moneda</td>
                    <td>{{ $respuesta->currency }}</td>
                </tr>
                <tr>
                <td>Descripción</td>
                <td>{{ $respuesta->description }}</td>
                </tr>
                <tr>
                <td>Entidad:</td>
                <td>{{ $respuesta->lapPaymentMethod }}</td>
                </tr>
            </table>
        </div>
        </div>
        <div class="col-sm-6"></div>
    </div>
@stop