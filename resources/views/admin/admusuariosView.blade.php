@extends('layouts.admin')
@section('content')
	{{ Form::open(['route' => 'admusuarios.store','method'=>'POST']) }}
		<div class="row">
			<div class="col-sm-7">
				<div class="form-group">
					<label for="">Agregar nuevo usuario</label>
					<div class="row">
						<div class="col-sm-6">
							<label for="">Nombre y apellidos</label>
							{{ Form::text('name',null,['id'=>'name','class'=>'form-control','required']) }}
							{{ Form::hidden('password',null,['id'=>'password']) }}
							{{ Form::hidden('role_id',1,['id'=>'role_id']) }}
						</div>
						<div class="col-sm-6">
							<label for="">Correo electrónico</label>
							{{ Form::email('email',null,['id'=>'email','class'=>'form-control','required']) }}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label for="">Teléfono</label>
							{{ Form::tel('phone',null,['id'=>'phone','class'=>'form-control','required']) }}
						</div>
						<div class="col-sm-6">
							<label for="">Teléfono Fijo</label>
							{{ Form::tel('fijo',null,['id'=>'fijo','class'=>'form-control','required']) }}
						</div>				
					</div>
					<div class="row">				
						<div class="col-sm-6">
							<label for="">Dirección</label>
							{{ Form::text('direccion',null,['id'=>'direccion','class'=>'form-control','required']) }}

						</div>
						<div class="col-sm-6">
							<label for="">Tipo de Documento</label>
							{{ Form::select('tipodocumento_id',$tipodocumento,null,['id'=>'tipodocumento_id','class'=>'form-control']) }}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label for="">Documento</label>
							{{ Form::text('documento',null,['id'=>'documento','class'=>'form-control','required']) }}
						</div>
						<div class="col-sm-6">
							<label for="">Fecha de nacimiento</label>
							{{ Form::date('fechanacimiento',null,['id'=>'fechanacimiento','class'=>'form-control','required']) }}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px;">Registrar</button>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-sm-5">
				<div class="form-group">
					<label for="">Buscar Usuario</label>
					<input type="text" class="form-control" id="admbuscarusuarios">
				</div>
				<div class="form-group">
					<ul class="list-group">
						<li class="list-group-item active">Usuarios</li>
						@forelse($usuarios as $usuario)

						<li class="list-group-item"><a href={{ route('admusuarios.show',$usuario->id) }}>{{ $usuario->name }}</a></li>
						@empty
								<p>No hay usuarios registrados aún</p>
						@endforelse
					</ul>
				</div>
			</div>
		</div>
	{{ Form::close() }}
@stop