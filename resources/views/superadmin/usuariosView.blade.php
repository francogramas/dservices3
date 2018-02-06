@extends('layouts.superadmin')
@section('content')

{{  Form::open(['route' => 'usuarios.store','method'=>'POST']) }}	
	{{ csrf_field() }}
	<h3>Registar Administradores</h3>
	<div class="row"> 
        <div class="col-md-6" style="padding-right: 15px;">
            <div class=" row form-group">
                    <label for="name" class="control-label">Nombres y apellidos</label>  
                    {{ Form::hidden('role_id','1',['id'=>'role_id']) }}
                    {{ Form::hidden('users_id','0',['id'=>'users_id']) }}
                    {{ Form::text('name',null,['id'=>'name', 'required', 'class'=>'form-control']) }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">                
                    <label for="email" class="control-label">E-Mail</label>
                    {{ Form::email('email',null,['id'=>'email', 'required', 'class'=>'form-control']) }}                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="row form-group">
	            	<label for="">Sede</label>
		    		{{ Form::select('sedes_id',$sedes,null,['id'=>'sedes_id','class'=>'form-control']) }}
            </div>
            <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="row form-group">
                    <label for="password-confirm" class="control-label">Confirmar contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>            
            <div class="row form-group">
                    <label for="password" class="control-label"><br></label>                    
                    <button type="submit" style="width: 100%"  class="btn btn-primary form-control">
                    	<i class="fa fa-check fa-lg">Registrar</i>                                
                    </button>
            </div>
        </div>
        <div class="col-md-6">
        	<table class="table">
        		<thead>
        			<tr>
        				<th>Usuario</th>
        				<th>Sede</th>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
        			@foreach ($users as $user)
        				<tr>
	        				<td>
	        					{{ $user->name }}
	        				</td>
	        				<td>
	        					{{ $user->ciudad }}
	        				</td>
	        				<td>
	        					<a href={{ route('usuarios.edit',$user->id) }} class="btn btn-primary btn-xs"  title="Editar"><span class="fa fa-edit fa-lg" aria-hidden="true"></span></a>
	        				</td>
	        			</tr>
        			@endforeach        			
        		</tbody>
        	</table>
        </div>
    </div>
{{ Form::close() }}
@stop