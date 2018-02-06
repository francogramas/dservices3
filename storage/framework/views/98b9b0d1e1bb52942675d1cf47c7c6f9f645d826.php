<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row  form-group">
		<div class="col-md-5">			
			<?php echo e(Form::model($contratistas, ['route' => ['contratistas.update',$contratistas->id],'method'=>'PUT'])); ?>

			
				<div class="row form-group">
					<div class="col-sm-12">
						<label for="">Sede</label>
	    				<?php echo e(Form::select('sedes_id',$sedes,$contratistas->sedes_id,['id'=>'sedes_id','class'=>'form-control'])); ?>

	    			</div>
	    			<div class="col-sm-6">
						<label for="">Tipo se servicios</label>
    					<?php echo e(Form::select('tiposervicios_id',$tiposervicios,$contratistas->tiposervicios_id,['id'=>'tiposervicios_id','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Nit</label>
						<?php echo e(Form::text('codigo',$contratistas->codigo,['id'=>'codigo', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Razón social</label>
						<?php echo e(Form::text('nombre',$contratistas->nombre,['id'=>'nombre', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Descripción</label>
						<?php echo e(Form::text('descripcion',$contratistas->descripcion,['id'=>'descripcion', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Departamento/estado</label>
    					<?php echo e(Form::select('departamentos',$estados,$contratistas->estados,['id'=>'departamentos','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Ciudad</label>
    					<?php echo e(Form::select('ciudades_id',$ciudades,$contratistas->ciudades_id,['id'=>'ciudades_id','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Dirección</label>
						<?php echo e(Form::text('direccion',$contratistas->direccion,['id'=>'direccion', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Teléfono</label>
						<?php echo e(Form::text('telefono',$contratistas->telefono,['id'=>'telefono', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Correo</label>
						<?php echo e(Form::email('correo',$contratistas->correo,['id'=>'correo', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Dirección Web</label>
						<?php echo e(Form::url('web',$contratistas->web,['id'=>'web', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary form-control">Actualizar</button>	
					</div>
				</div>
			<?php echo e(Form::close()); ?>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>