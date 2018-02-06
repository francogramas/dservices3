<?php $__env->startSection('content'); ?>

<div>
	<div class="row form-group">
		<?php echo e(Form::open(['route' =>'usuarios1.store','method'=>'POST'])); ?>	
		<div class="form-group">
			<label for="">Agregar nuevo usuario</label>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Nombre y apellidos</label>
					<?php echo e(Form::text('name',null,['id'=>'name','class'=>'form-control','required'])); ?>

					<?php echo e(Form::hidden('password',null,['id'=>'password'])); ?>

				</div>
				<div class="col-sm-6">
					<label for="">Correo electrónico</label>
					<?php echo e(Form::email('email',null,['id'=>'email','class'=>'form-control','required'])); ?>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Teléfono</label>
					<?php echo e(Form::tel('phone',null,['id'=>'phone','class'=>'form-control','required'])); ?>

				</div>
				<div class="col-sm-6">
					<label for="">Teléfono Fijo</label>
					<?php echo e(Form::tel('fijo',null,['id'=>'fijo','class'=>'form-control','required'])); ?>

				</div>				
			</div>
			<div class="row">				
				<div class="col-sm-6">
					<label for="">Dirección</label>
					<?php echo e(Form::text('direccion',null,['id'=>'direccion','class'=>'form-control','required'])); ?>


				</div>
				<div class="col-sm-6">
					<label for="">Tipo de Documento</label>
					<?php echo e(Form::select('tipodocumento_id',$tipodocumento,null,['id'=>'tipodocumento_id','class'=>'form-control'])); ?>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Documento</label>
					<?php echo e(Form::text('documento',null,['id'=>'documento','class'=>'form-control','required'])); ?>

				</div>
				<div class="col-sm-6">
					<label for="">Fecha de nacimiento</label>
					<?php echo e(Form::date('fechanacimiento',null,['id'=>'fechanacimiento','class'=>'form-control','required'])); ?>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px;">Registrar</button>
				</div>
			</div>
		</div>		
	<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>