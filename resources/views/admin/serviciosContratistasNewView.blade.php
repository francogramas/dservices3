@extends('layouts.admin')
@section('content')

<div class="container">
	<div class="row  form-group">
		<div class="col-md-12">			
			{{  Form::open(['route' => 'servicioscontratistas.store','method'=>'POST', 'class'=>'wpcf7-form']) }}			
				<div class="row form-group">
					<div class="row form-group">
						<div class="col-sm-12">
							<label for="">Contratista</label>
							<input type="search" class="form-control" id="Buscarcontratistas">
							{{ Form::hidden('contratistas_id',null,['id'=>'contratistas_id']) }}							
						</div>					
						<div class="col-sm-12">
							<label for="">Nombre de servicio</label>
							{{ Form::text('nombre',null,['id'=>'nombre', 'required','class'=>'form-control']) }}							
						</div>
						<div class="col-sm-12"><label for="">Descripción</label>
							{{ Form::text('descripcion',null,['id'=>'descripcion', 'required','class'=>'form-control']) }}							
						</div>
						<div class="col-sm-6"><label for="">Tarifa</label>
							{{ Form::number('tarifaparticular',null,['id'=>'tarifaparticular', 'required', 'step'=>'0.1','class'=>'form-control']) }}
						</div>
						<div class="col-sm-6"><label for="">Costo</label>
							{{ Form::number('ingresoconvenio',null,['id'=>'ingresoconvenio', 'required', 'step'=>'0.1','class'=>'form-control']) }}
						</div>
						<div class="col-sm-12">
							<label for=""><br></label>
							<input type="submit" class="btn btn-primary form-control" value="Guardar">
							<label for=""><br></label>

						</div>
					</div>					
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Contratista</span></td>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Servicio</td>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Costo</td>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Tarifa</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				@foreach ($servicioscontratistas as $servicioscontratista)
					<tr>
						<td>{{ $servicioscontratista->contratista }}</td>
						<td>{{ $servicioscontratista->nombre }}</td>
						<td>{{ $servicioscontratista->ingresoconvenio }}</td>
						<td>{{ $servicioscontratista->tarifaparticular }}</td>
						<td>
							{{ Form::open(['route' => ['servicioscontratistas.destroy',$servicioscontratista->id],'method'=>'DELETE']) }}
								<a href={{ route('servicioscontratistas.show',$servicioscontratista->id) }} class="btn btn-xs btn-primary"  title="Ver">
									   <span class="fa fa-eye fa-lg" aria-hidden="true" ></span>            
								</a>
								<a href={{ route('servicioscontratistas.edit',$servicioscontratista->id) }} class="btn btn-xs btn-primary"  title="Editar">
									   <span class="fa fa-edit fa-lg" aria-hidden="true" ></span>            
								</a>
							  	<button type="submit" class="btn btn-xs btn-danger" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true" ></span>
							    </button>
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach					
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop