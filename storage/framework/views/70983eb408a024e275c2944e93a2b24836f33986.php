<?php $__env->startSection('content'); ?>
<?php echo e(Form::open(['route' => 'especialidades.store','method'=>'POST'])); ?>

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
<?php echo e(Form::close()); ?>


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
				<?php $__empty_1 = true; $__currentLoopData = $especialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especialidadi): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>	
				<tr>
					<td>
						<?php echo e($especialidadi->nombre); ?>

					</td>
					<td>
						<?php echo e(Form::open(['route' => ['especialidades.destroy',$especialidadi->id],'method'=>'DELETE'])); ?>

								<a href=<?php echo e(route('especialidades.show',$especialidadi->id)); ?> class="btn btn-primary btn-xs"  title="Editar">
									   <span class="fa fa-edit" aria-hidden="true" ></span>            
								</a>
							  	<button type="submit" class="btn btn-danger btn-xs" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true"></span>
							    </button>
							<?php echo e(Form::close()); ?>

					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
					<tr>
						<td>
							No existen especialidades registradas aún
						</td>
						<td></td>
					</tr>
				<?php endif; ?>
				
			</tbody>
		</table>
		<?php echo e($especialidades->links()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>