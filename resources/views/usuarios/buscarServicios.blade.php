@extends('layouts.app')

@section('page_header')        
    <i class="voyager-compass"></i> Buscar Servicios 
@stop
@section('content')
	<div class="row form-group" >
		<div class="col-sm-12">
			Tenemos lo que necesitas, teclea las palabras del servicio que buscas
			<input type="text" id="serviciosContratistas" name="serviciosContratistas" class="form-control" placeholder="Buscar servicio...">
		</div>
	</div>
	<div class="row form-group" >
		<div class="col-sm-12">
			<div id="tablaServicios">
		</div>
	</div>
@stop