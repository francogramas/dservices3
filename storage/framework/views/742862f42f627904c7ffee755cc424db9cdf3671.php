<?php $__env->startSection('content'); ?>
<?php echo e(Form::model($tarifas, ['route' => ['tarifas.update',$tarifas->id],'method'=>'PUT'])); ?>

	<div class="row form-group">
		<div class="col-sm-4">
			<p>
				<label for="">Tarifa</label>
				<?php echo e(Form::text('nombre',$tarifas->nombre,['id'=>'nombre', 'required', 'class'=>'form-control'])); ?>

			</p>
			<p>
				<label for="">Procentaje</label>
				<?php echo e(Form::number('porcentaje',$tarifas->porcentaje,['id'=>'porcentaje', 'required', 'class'=>'form-control'])); ?>

			</p>
			<p>
				<input type="submit" value="Actualizar" class="btn btn-primary form-control" >
			</p>
		</div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>