@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row  form-group">
		<div class="col-md-5">			
				<div class="row form-group">
					<div class="row form-group">
						<div class="col-sm-12">
							<label for="">Contratista</label>
							<label for="" class="form-control" id="contratistas">{{ $servicioscontratistas->contratista }}</label>
							{{ Form::hidden('contratistas_id',null,['id'=>'contratistas_id']) }}							
						</div>							
						<div class="col-sm-12">
							<label for="">Nombre de servicio</label>
							{{ Form::label('nombre', $servicioscontratistas->nombre ,['id'=>'nombre', 'required','class'=>'form-control']) }}							
						</div>
						<div class="col-sm-12"><label for="">Descripción</label>
							{{ Form::label('descripcion', $servicioscontratistas->descripcion ,['id'=>'descripcion', 'required','class'=>'form-control']) }}							
						</div>
						<div class="col-sm-6"><label for="">Tarifa</label>
							{{ Form::label('tarifaparticular', $servicioscontratistas->tarifaparticular ,['id'=>'tarifaparticular', 'required', 'step'=>'0.1','class'=>'form-control']) }}
						</div>
						<div class="col-sm-6"><label for="">Costo</label>
							{{ Form::label('ingresoconvenio', $servicioscontratistas->ingresoconvenio ,['id'=>'ingresoconvenio', 'required', 'step'=>'0.1','class'=>'form-control']) }}
						</div>
						<div class="col-sm-12">
							<a href={{ route('servicioscontratistas.index') }} class="btn btn-primary form-control">Volver</a>
						</div>
					</div>								
				</div>
		</div>
	</div>
</div>

@stop