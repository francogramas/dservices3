@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row  form-group">
		{{  Form::open(['route' => 'sedes.store','method'=>'POST','class'=>'wpcf7-form']) }}		
			<div class="col-md-6">
				<div class="row form-group">
					<div class="col-sm-6">
						<label for="estado">Departamento/estado</label>
    					{{ Form::select('departamentos',$estados,null,['id'=>'departamentos','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="ciudad">Ciudad</label>
    					{{ Form::select('ciudades_id',$ciudades,null,['id'=>'ciudades_id','class'=>'form-control']) }}
					</div>
					<div class="col-sm-12">
						<label for="">Dirección</label>
						{{ Form::text('direccion',null,['id'=>'direccion', 'required','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Teléfonos</label>
						{{ Form::text('telefonos',null,['id'=>'telefonos', 'required','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for="">Correo</label>
						{{ Form::email('email',null,['id'=>'email', 'required', 'type'=>'email','class'=>'form-control']) }}
					</div>
					<div class="col-sm-6">
						<label for=""><br></label>
						<input type="submit" class="btn btn-primary form-control" value="Crear">
					</div>
				</div>
			</div>			
		{{ Form::close() }}

		<div class="col-md-6">
			<table class="table">
			<caption><h3>Sedes</h3></caption>
				<thead>
					<tr>
						<td><span style="color:#ffffff;font-weight: bold; font-size: 1.2em;"><strong>Ciudad</strong></span></td>
						<td><span style="color:#ffffff;font-weight: bold; font-size: 1.2em;"><strong>Teléfonos</strong></span></td>
						<td><span style="color:#ffffff;font-weight: bold; font-size: 1.2em;"><strong>Correo</strong></span></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				@foreach ($sedes as $sede)
					{{-- expr --}}
					<tr>
						<td>{{ $sede->ciudad }}</td>
						<td>{{ $sede->telefonos }}</td>
						<td>{{ $sede->email }}</td>
						<td>
							{{ Form::open(['route' => ['sedes.destroy',$sede->id],'method'=>'DELETE']) }}
								<a href={{ route('sedes.show',$sede->id) }} class="btn btn-primary btn-xs"  title="Editar">
									   <span class="fa fa-edit" aria-hidden="true" ></span>            
								</a>
							  	<button type="submit" class="btn btn-danger btn-xs" title="Borrar">
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
	<div class="row  form-group">
		<div class="col-md-2"></div>
		<div class="col-md-6">
		</div>
	</div>
</div>
@stop