@extends('layouts.superadmin')
@section('content')
{{  Form::open(['route' => 'especialidades.store','method'=>'POST']) }}
	<div class="row form-group">
		<div class="col-sm-8">
			<label for="">Especialidad</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>
		<div class="col-sm-2">
			<label for=""><br></label>
			<input type="submit" class="btn btn-primary form-control" value="Agregar">
		</div>
	</div>
{{ Form::close() }}

<div class="row form-group">
	<div class="col-sm-10">
		<table class="table">
			<thead>

				<tr>
					<th>Especialidad</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@forelse ($especialidades as $especialidadi)	
				<tr>
					<td>
						{{ $especialidadi->nombre }}
					</td>
					<td>
						{{ Form::open(['route' => ['especialidades.destroy',$especialidadi->id],'method'=>'DELETE']) }}
								<a href={{ route('especialidades.show',$especialidadi->id) }} class="btn btn-primary btn-xs"  title="Editar">
									   <span class="fa fa-edit" aria-hidden="true" ></span>            
								</a>
							  	<button type="submit" class="btn btn-danger btn-xs" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true"></span>
							    </button>
							{{ Form::close() }}
					</td>
				</tr>
				@empty
					<tr>
						<td>
							No existen especialidades registradas aún
						</td>
						<td></td>
					</tr>
				@endforelse
				
			</tbody>
		</table>
		{{ $especialidades->links() }}
	</div>
</div>

@stop