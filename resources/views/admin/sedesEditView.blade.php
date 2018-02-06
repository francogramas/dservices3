@extends('layouts.admin')

@section('content')
<style>
	label{
		display: block;
		width: 100%;
	}
	.form-control{
		width: 100%;
	}
</style>
	<form class="wpcf7-form">
	<div class="container">
		<div class="row  form-group">	
			{{ Form::model($sedes, ['route' => ['sedes.update',$sedes->id],'method'=>'PUT']) }}
				<div class="col-md-6">
					<div class="row form-group">
						<div class="col-sm-6">
							<label for="estado">Departamento/estado</label>
	    					{{ Form::select('departamentos',$estados,$sedes->estados,['id'=>'departamentos','class'=>'form-control']) }}
						</div>
						<div class="col-sm-6">
							<label for="ciudad">Ciudad</label>
	    					{{ Form::select('ciudades_id',$ciudades,$sedes->ciudades_id,['id'=>'ciudades_id','class'=>'form-control']) }}
						</div>
						<div class="col-sm-6">
							<label for="">Dirección</label>
							{{ Form::text('direccion',$sedes->direccion,['id'=>'direccion', 'required', 'class'=>'form-control']) }}
						</div>
						<div class="col-sm-6">
							<label for="">Teléfonos</label>
							{{ Form::text('telefonos',$sedes->telefonos,['id'=>'telefonos', 'required', 'class'=>'form-control']) }}
						</div>
						<div class="col-sm-6">
							<label for="">Correo</label>
							{{ Form::email('email',$sedes->email,['id'=>'email', 'required', 'type'=>'email', 'class'=>'form-control']) }}
						</div>
						<div class="col-sm-12">
							<input type="submit" class="btn btn-primary form-control" value="Actualizar">
						</div>
					</div>
				</div>			
			{{ Form::close() }}
		</div>
	</div>
</form>
@stop