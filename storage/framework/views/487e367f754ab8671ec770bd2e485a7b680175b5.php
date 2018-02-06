<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row  form-group">
		<?php echo e(Form::open(['route' => 'sedes.store','method'=>'POST','class'=>'wpcf7-form'])); ?>		
			<div class="col-md-6">
				<div class="row form-group">
					<div class="col-sm-6">
						<label for="estado">Departamento/estado</label>
    					<?php echo e(Form::select('departamentos',$estados,null,['id'=>'departamentos','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="ciudad">Ciudad</label>
    					<?php echo e(Form::select('ciudades_id',$ciudades,null,['id'=>'ciudades_id','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-12">
						<label for="">Dirección</label>
						<?php echo e(Form::text('direccion',null,['id'=>'direccion', 'required','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Teléfonos</label>
						<?php echo e(Form::text('telefonos',null,['id'=>'telefonos', 'required','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Correo</label>
						<?php echo e(Form::email('email',null,['id'=>'email', 'required', 'type'=>'email','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for=""><br></label>
						<input type="submit" class="btn btn-primary form-control" value="Crear">
					</div>
				</div>
			</div>			
		<?php echo e(Form::close()); ?>


		<div class="col-md-6">
			<table class="table">
			<caption><h3>Sedes</h3></caption>
				<thead>
					<tr>
						<td><span style="color:#ffffff;font-weight: bold; font-size: 1.2em;"><strong>Ciudad</strong></span></td>
						<td><span style="color:#ffffff;font-weight: bold; font-size: 1.2em;"><strong>Teléfonos</strong></span></td>
						<td><span style="color:#ffffff;font-weight: bold; font-size: 1.2em;"><strong>Correo</strong></span></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $sedes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sede): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					
					<tr>
						<td><?php echo e($sede->ciudad); ?></td>
						<td><?php echo e($sede->telefonos); ?></td>
						<td><?php echo e($sede->email); ?></td>
						<td>
							<?php echo e(Form::open(['route' => ['sedes.destroy',$sede->id],'method'=>'DELETE'])); ?>

								<a href=<?php echo e(route('sedes.show',$sede->id)); ?> class="btn btn-primary btn-xs"  title="Editar">
									   <span class="fa fa-edit" aria-hidden="true" ></span>            
								</a>
							  	<button type="submit" class="btn btn-danger btn-xs" title="Borrar">
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