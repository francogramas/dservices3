@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span style="font-size: 22px; font-weight: bold;"><b>Restablecer contraseña</b></span></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class=" row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="fusion-button-wrapper fusion-alignleft" style="width: 100%;" >
                                    <label for=""><br></label>
                                    <button type="submit" style="width: 100%"  class="fusion-button button-flat fusion-button-square button-large button-custom button-3 form-control">
                                        <span class="fusion-button-icon-divider button-icon-divider-left">
                                            <i class="fa fa-check fa-lg"></i>
                                        </span>
                                        <span class="fusion-button-text fusion-button-text-left">Enviar enlace de restablecimiento</span>
                                    </button>
                                </div>                          
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
