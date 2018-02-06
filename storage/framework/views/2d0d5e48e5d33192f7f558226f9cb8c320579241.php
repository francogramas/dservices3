<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row  form-group">
		<div class="col-md-12">			
			<?php echo e(Form::open(['route' => 'servicioscontratistas.store','method'=>'POST', 'class'=>'wpcf7-form'])); ?>			
				<div class="row form-group">
					<div class="row form-group">
						<div class="col-sm-12">
							<label for="">Contratista</label>
							<input type="search" class="form-control" id="Buscarcontratistas">
							<?php echo e(Form::hidden('contratistas_id',null,['id'=>'contratistas_id'])); ?>							
						</div>					
						<div class="col-sm-12">
							<label for="">Nombre de servicio</label>
							<?php echo e(Form::text('nombre',null,['id'=>'nombre', 'required','class'=>'form-control'])); ?>							
						</div>
						<div class="col-sm-12"><label for="">Descripción</label>
							<?php echo e(Form::text('descripcion',null,['id'=>'descripcion', 'required','class'=>'form-control'])); ?>							
						</div>
						<div class="col-sm-6"><label for="">Tarifa</label>
							<?php echo e(Form::number('tarifaparticular',null,['id'=>'tarifaparticular', 'required', 'step'=>'0.1','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6"><label for="">Costo</label>
							<?php echo e(Form::number('ingresoconvenio',null,['id'=>'ingresoconvenio', 'required', 'step'=>'0.1','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-12">
							<label for=""><br></label>
							<input type="submit" class="btn btn-primary form-control" value="Guardar">
							<label for=""><br></label>

						</div>
					</div>					
				</div>
			<?php echo e(Form::close()); ?>

		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Contratista</span></td>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Servicio</td>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Costo</td>
						<td><span style=" font-weight: bold; font-size: 1.2em;">Tarifa</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $servicioscontratistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicioscontratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo e($servicioscontratista->contratista); ?></td>
						<td><?php echo e($servicioscontratista->nombre); ?></td>
						<td><?php echo e($servicioscontratista->ingresoconvenio); ?></td>
						<td><?php echo e($servicioscontratista->tarifaparticular); ?></td>
						<td>
							<?php echo e(Form::open(['route' => ['servicioscontratistas.destroy',$servicioscontratista->id],'method'=>'DELETE'])); ?>

								<a href=<?php echo e(route('servicioscontratistas.show',$servicioscontratista->id)); ?> class="btn btn-xs btn-primary"  title="Ver">
									   <span class="fa fa-eye fa-lg" aria-hidden="true" ></span>            
								</a>
								<a href=<?php echo e(route('servicioscontratistas.edit',$servicioscontratista->id)); ?> class="btn btn-xs btn-primary"  title="Editar">
									   <span class="fa fa-edit fa-lg" aria-hidden="true" ></span>            
								</a>
							  	<button type="submit" class="btn btn-xs btn-danger" title="Borrar">
							 		<span class="fa fa-trash-o fa-lg" aria-hidden="true" ></span>
							    </button>
							<?php echo e(Form::close()); ?>

						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>					
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>