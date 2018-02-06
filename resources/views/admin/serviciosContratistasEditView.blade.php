@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="row  form-group">
		<div class="col-md-5">			
			{{ Form::model($servicioscontratistas, ['route' => ['servicioscontratistas.update',$servicioscontratistas->id],'method'=>'PUT','class'=>'wpcf7-form']) }}		
			{{  Form::open(['route' => 'servicioscontratistas.store','method'=>'POST']) }}			
				<div class="row form-group">
					<div class="row form-group">
						<div class="col-sm-12">
							<label for="">Contratista</label>
							<input type="text" class="form-control" id="Buscarcontratistas" value="{{ $servicioscontratistas->contratista }}">
							{{ Form::hidden('contratistas_id',$servicioscontratistas->contratistas_id,['id'=>'contratistas_id']) }}
						</div>					
						<div class="col-sm-12">
							<label for="">Nombre de servicio</label>
							{{ Form::text('nombre',$servicioscontratistas->nombre,['id'=>'nombre', 'required','class'=>'form-control']) }}							
						</div>
						<div class="col-sm-12"><label for="">Descripción</label>
							{{ Form::text('descripcion',$servicioscontratistas->descripcion,['id'=>'descripcion', 'required','class'=>'form-control']) }}							
						</div>
						<div class="col-sm-6"><label for="">Tarifa</label>
							{{ Form::number('tarifaparticular',$servicioscontratistas->tarifaparticular,['id'=>'tarifaparticular', 'required', 'step'=>'0.1','class'=>'form-control']) }}
						</div>
						<div class="col-sm-6"><label for="">Costo</label>
							{{ Form::number('ingresoconvenio',$servicioscontratistas->ingresoconvenio,['id'=>'ingresoconvenio', 'required', 'step'=>'0.1','class'=>'form-control']) }}
						</div>
						<div class="col-sm-12">
							<input type="submit" class="btn btn-primary form-control" value="Actualizar">
						</div>
					</div>					
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop