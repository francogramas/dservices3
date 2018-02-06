@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row  form-group">
		<div class="col-md-5">			
			{{  Form::open(['route' => 'contratistas.store','method'=>'POST', 'class'=>'wpcf7-form']) }}	
				<div class="row form-group">
					<div class="col-sm-12">
						<label for="">Sede</label>
	    				{{ Form::select('sedes_id',$sedes,null,['id'=>'sedes_id','class'=>'form-control']) }}
	    			</div>
	    			<div class="col-sm-6">
						<label for="">Tipo se servicios</label>
    					{{ Form::select('tiposervicios_id',$tiposervicios,null,['id'=>'tiposervicios_id','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Nit</label>
						{{ Form::text('codigo',null,['id'=>'codigo', 'required', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Razón social</label>
						{{ Form::text('nombre',null,['id'=>'nombre', 'required', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Descripción</label>
						{{ Form::text('descripcion',null,['id'=>'descripcion', 'required', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Departamento/estado</label>
    					{{ Form::select('departamentos',$estados,null,['id'=>'departamentos','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Ciudad</label>
    					{{ Form::select('ciudades_id',$ciudades,null,['id'=>'ciudades_id','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Dirección</label>
						{{ Form::text('direccion',null,['id'=>'direccion', 'required', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Teléfono</label>
						{{ Form::text('telefono',null,['id'=>'telefono', 'required', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Correo</label>
						{{ Form::email('correo',null,['id'=>'correo', 'required', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Dirección Web</label>
						{{ Form::url('web',null,['id'=>'web', 'class'=>'form-control']) }}
					</div>
					<div class="col-sm-12">
						<label for=""><br></label>
						<button type="submit" class="btn btn-primary">Agregar</button>	
					</div>
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-7">
			<table class="table">
				<thead>
					<tr>
						<td>Razón social</td>
						<td>Teléfono</td>						
						<td>Ciudad</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				@foreach ($contratistas as $contratista)
					<tr>
						<td>{{ $contratista->nombre }}</td>
						<td>{{ $contratista->telefono }}</td>
						<td>{{ $contratista->ciudad }}</td>
						<td>
							{{ Form::open(['route' => ['contratistas.destroy',$contratista->id],'method'=>'DELETE']) }}
								<a href={{ route('contratistas.show',$contratista->id) }} class="btn btn-primary btn-xs"  title="Ver">
									   <span class="fa fa-eye fa-lg" aria-hidden="true"></span>            
								</a>
								<a href={{ route('contratistas.edit',$contratista->id) }} class="btn btn-primary btn-xs"  title="Editar">
									   <span class="fa fa-edit fa-lg" aria-hidden="true"></span>            
								</a>
							  	<button type="submit" class="btn btn-xs btn-danger" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true"></span>
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