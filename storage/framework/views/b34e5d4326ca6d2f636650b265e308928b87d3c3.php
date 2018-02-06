<?php $__env->startSection('content'); ?>
<?php echo e(Form::model($tiposervicios, ['route' => ['categorias.update',$tiposervicios->id],'method'=>'PUT'])); ?>


<div class="container">
	<div class="row  form-group">
		<div class="col-md-4">
			<?php echo e(Form::text('nombre',$tiposervicios->nombre,['id'=>'nombre','required'=>'required','placeholder'=>'Nueva categoría','class'=>'form-control'])); ?>			
		</div>
		<div class="col-md-2">
			<input type="submit" class="btn btn-primary form-control" value="Actualizar">			
		</div>		
	</div>
</div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>