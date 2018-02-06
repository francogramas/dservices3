<?php $__env->startSection('content'); ?>
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
			<?php echo e(Form::model($sedes, ['route' => ['sedes.update',$sedes->id],'method'=>'PUT'])); ?>

				<div class="col-md-6">
					<div class="row form-group">
						<div class="col-sm-6">
							<label for="estado">Departamento/estado</label>
	    					<?php echo e(Form::select('departamentos',$estados,$sedes->estados,['id'=>'departamentos','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="ciudad">Ciudad</label>
	    					<?php echo e(Form::select('ciudades_id',$ciudades,$sedes->ciudades_id,['id'=>'ciudades_id','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Dirección</label>
							<?php echo e(Form::text('direccion',$sedes->direccion,['id'=>'direccion', 'required', 'class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Teléfonos</label>
							<?php echo e(Form::text('telefonos',$sedes->telefonos,['id'=>'telefonos', 'required', 'class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Correo</label>
							<?php echo e(Form::email('email',$sedes->email,['id'=>'email', 'required', 'type'=>'email', 'class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-12">
							<input type="submit" class="btn btn-primary form-control" value="Actualizar">
						</div>
					</div>
				</div>			
			<?php echo e(Form::close()); ?>

		</div>
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>