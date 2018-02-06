@extends('layouts.app')

@section('page_header')        
    <h1> <i class="voyager-person"></i>Resgistro de usuarios</h1> 
@stop

@section('content')
<form    method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
<div class="container">
    <style type="text/css" scoped="scoped">
    .fusion-button .button-3 .fusion-button-text, .fusion-button.button-3 i {
        color:#ffffff;
        }
        .fusion-button .button-3 {
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
        <div class="col-md-8 col-md-offset-2">
            <div class=" row form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-md-7">
                    <label for="name" class="control-label">Nombres y apellidos</label>                                
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">                
                <div class="col-md-7">
                    <label for="email" class="control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">                
                <div class="col-md-7">
                    <label for="password" class="control-label">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row form-group">                
                <div class="col-md-7">
                    <label for="password-confirm" class="control-label">Confirmar contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-7">
                    <label for="password" class="control-label"><br></label>                    
                    <div class="fusion-column-wrapper" style="width: 100%; background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
                        <div class="fusion-button-wrapper fusion-alignleft" style="width: 100%" >
                            <button type="submit" style="width: 100%"  class="fusion-button button-flat fusion-button-square button-large button-custom button-3 form-control">
                                <span class="fusion-button-icon-divider button-icon-divider-left">
                                    <i class="fa fa-check fa-lg"></i>
                                </span>
                                <span class="fusion-button-text fusion-button-text-left">Registrar</span>                                
                            </button>
                        </div>
                    </div>                
            </div>
        </div>        
        </div>
    </div>
</div>
</form>
@endsection
