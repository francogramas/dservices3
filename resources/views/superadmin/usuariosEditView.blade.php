@extends('layouts.superadmin')
@section('content')

{{  Form::model($user, ['route' => ['usuarios.update',$user->id],'method'=>'PUT']) }}
	{{ csrf_field() }}
	<h3>Registar Administradores</h3>
	<div class="row"> 
        <div class="col-md-6" style="padding-right: 15px;">
            <div class="row form-group">
                    <label for="name" class="control-label">Nombres y apellidos</label>  
                    {{ Form::text('name',$user->name,['id'=>'name', 'required', 'class'=>'form-control']) }}
            </div>
            <div class="row form-group">                
                    <label for="email" class="control-label">E-Mail</label>
                    {{ Form::email('email',$user->email,['id'=>'email', 'required', 'class'=>'form-control']) }}                    
            </div>
            <div class="row form-group">
	            	<label for="">Sede</label>
		    		{{ Form::select('sedes_id',$sedes,null,['id'=>'sedes_id','class'=>'form-control']) }}
            </div>            
            <div class="row form-group">
                    <button type="submit" style="width: 100%"  class="btn btn-primary form-control">
                    	<i class="fa fa-check fa-lg">Actualizar</i>                                
                    </button>
            </div>
        </div>
    </div>
{{ Form::close() }}
@stop