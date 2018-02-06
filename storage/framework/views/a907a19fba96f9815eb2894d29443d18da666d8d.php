<?php $__env->startSection('content'); ?>
	<?php echo e(Form::open(['route' => 'admusuarios.store','method'=>'POST'])); ?>

		<div class="row">
			<div class="col-sm-7">
				<div class="form-group">
					<label for="">Agregar nuevo usuario</label>
					<div class="row">
						<div class="col-sm-6">
							<label for="">Nombre y apellidos</label>
							<?php echo e(Form::text('name',null,['id'=>'name','class'=>'form-control','required'])); ?>

							<?php echo e(Form::hidden('password',null,['id'=>'password'])); ?>

							<?php echo e(Form::hidden('role_id',1,['id'=>'role_id'])); ?>

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
			</div>
			<div class="col-sm-5">
				<div class="form-group">
					<label for="">Buscar Usuario</label>
					<input type="text" class="form-control" id="admbuscarusuarios">
				</div>
				<div class="form-group">
					<ul class="list-group">
						<li class="list-group-item active">Usuarios</li>
						<?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>

						<li class="list-group-item"><a href=<?php echo e(route('admusuarios.show',$usuario->id)); ?>><?php echo e($usuario->name); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
								<p>No hay usuarios registrados aún</p>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>