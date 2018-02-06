@extends('layouts.app')

@section('content')  
<div class="">
    <div class="row">
        <div class="col-md-10">

            <div>
                <div><span style="font-weight: bold; color: #ffffff;">Para continuar debes ser usuario, si eres nuevo registra tus datos o ingresa con tu facebook.</span></div>
                <div>
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">                            
                                <button type="submit"  class="form-control btn btn-primary">
                                    <i class="fa fa-sign-in"></i>Entrar                                
                                </button>   
                            </div>
                            <div class="col-md-4">
                                <a href="{{ url('/auth/facebook') }}" class="form-control btn btn-primary">
                                    <i class="fa fa-facebook"></i>Entrar con facebook
                                </a>
                            </div>
                            <div class="col-md-4">                            
                                <a href="{{ url('/register') }}" class="form-control btn btn-primary">
                                    <i class="fa fa-users"></i>Nuevo Usuario
                                </a>        
                             </div>
                            </div>
                            <div class="col-md-12">
                              <a href="{{ url('/password/reset') }}" style="font-weight: bold; color: #ffffff;">¿Olvidaste tu contraseña?</a>
                            </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">                                

                                </div>                                
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
