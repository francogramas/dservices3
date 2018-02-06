<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row  form-group">
		<div class="col-md-5">			
			<?php echo e(Form::open(['route' => 'contratistas.store','method'=>'POST', 'class'=>'wpcf7-form'])); ?>	
				<div class="row form-group">
					<div class="col-sm-12">
						<label for="">Sede</label>
	    				<?php echo e(Form::select('sedes_id',$sedes,null,['id'=>'sedes_id','class'=>'form-control'])); ?>

	    			</div>
	    			<div class="col-sm-6">
						<label for="">Tipo se servicios</label>
    					<?php echo e(Form::select('tiposervicios_id',$tiposervicios,null,['id'=>'tiposervicios_id','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Nit</label>
						<?php echo e(Form::text('codigo',null,['id'=>'codigo', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Razón social</label>
						<?php echo e(Form::text('nombre',null,['id'=>'nombre', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Descripción</label>
						<?php echo e(Form::text('descripcion',null,['id'=>'descripcion', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Departamento/estado</label>
    					<?php echo e(Form::select('departamentos',$estados,null,['id'=>'departamentos','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Ciudad</label>
    					<?php echo e(Form::select('ciudades_id',$ciudades,null,['id'=>'ciudades_id','class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Dirección</label>
						<?php echo e(Form::text('direccion',null,['id'=>'direccion', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Teléfono</label>
						<?php echo e(Form::text('telefono',null,['id'=>'telefono', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Correo</label>
						<?php echo e(Form::email('correo',null,['id'=>'correo', 'required', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-6">
						<label for="">Dirección Web</label>
						<?php echo e(Form::url('web',null,['id'=>'web', 'class'=>'form-control'])); ?>

					</div>
					<div class="col-sm-12">
						<label for=""><br></label>
						<button type="submit" class="btn btn-primary">Agregar</button>	
					</div>
				</div>
			<?php echo e(Form::close()); ?>

		</div>
		<div class="col-md-7">
			<table class="table">
				<thead>
					<tr>
						<td>Razón social</td>
						<td>Teléfono</td>						
						<td>Ciudad</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $contratistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo e($contratista->nombre); ?></td>
						<td><?php echo e($contratista->telefono); ?></td>
						<td><?php echo e($contratista->ciudad); ?></td>
						<td>
							<?php echo e(Form::open(['route' => ['contratistas.destroy',$contratista->id],'method'=>'DELETE'])); ?>

								<a href=<?php echo e(route('contratistas.show',$contratista->id)); ?> class="btn btn-primary btn-xs"  title="Ver">
									   <span class="fa fa-eye fa-lg" aria-hidden="true"></span>            
								</a>
								<a href=<?php echo e(route('contratistas.edit',$contratista->id)); ?> class="btn btn-primary btn-xs"  title="Editar">
									   <span class="fa fa-edit fa-lg" aria-hidden="true"></span>            
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>