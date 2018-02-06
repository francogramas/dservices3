@extends('layouts.app')
@section('page_header')        
    <h1> <i class="voyager-bubble-hear"></i> Nuestros servicios</h1> 
@stop
@section('content')
<form class="wpcf7-form">
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
        <div class="col-md-12">
            <h2> <span style="color:#ffffff;"><i class="fa fa-map-marker fa-2x"></i>¿En qué ciudad te encuentras?</span></h2> 
        </div>
    </div>
<div class="row form-group">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">           
        <div class="row"> 
            @foreach ($tiposervicios as $tiposervicio)
                <div class="col-sm-3 form-group" >
                        <a href={{ route('servicios.show',$tiposervicio->id) }} style="width: 100%" class="btn btn-info btn-lg">
                            <span class="fusion-button-text">{{ $tiposervicio->nombre }}</span>
                        </a>                                        
                </div>
            @endforeach                
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
</form>    
@endsection