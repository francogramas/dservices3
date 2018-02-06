<?php $__env->startSection('content'); ?>
<?php echo e(Form::model($especialidades, ['route' => ['especialidades.update',$especialidades->id],'method'=>'PUT'])); ?>

	<div class="row form-group">
		<div class="col-sm-8">
			<label for="">Especialidad</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo e($especialidades->nombre); ?>">
		</div>
		<div class="col-sm-2">
			<label for=""><br></label>	
			<input type="submit" class="btn btn-primary form-control" value="Actualizar">
		</div>
	</div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>