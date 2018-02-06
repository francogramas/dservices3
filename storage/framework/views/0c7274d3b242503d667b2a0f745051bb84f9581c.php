<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row  form-group">
		<?php echo e(Form::open(['route' => 'categorias.store','method'=>'POST'])); ?>		
			<div class="col-md-4">
				<?php echo e(Form::text('nombre',null,['id'=>'nombre','required'=>'required','placeholder'=>'Nueva categoría','class'=>'form-control'])); ?>			
			</div>
			<div class="col-md-2">
				<input type="submit" class="btn btn-primary form-control" value="Crear">			
			</div>
		<?php echo e(Form::close()); ?>


		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<td><span style="font-weight: bold; font-size: 1.2em;"><strong>Categoría</strong></span></td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $tiposervicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiposervicio): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					
					<tr>
						<td><?php echo e($tiposervicio->nombre); ?></td>
						<td>
														    						
							<?php echo e(Form::open(['route' => ['categorias.destroy',$tiposervicio->id],'method'=>'DELETE'])); ?>

								<a href=<?php echo e(route('categorias.show',$tiposervicio->id)); ?> class="btn btn-primary btn-xs" title="Editar">
									   <span class="fa fa-edit" aria-hidden="true"></span>            
								</a>
							  	<button type="submit" class="btn btn-xs btn-danger" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true"></span>
							    </button>
							<?php echo e(Form::close()); ?>

						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>					
				</tbody>
			</table>
		</div>
	</div>
	<div class="row  form-group">
		<div class="col-md-2"></div>
		<div class="col-md-6">
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>