<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row  form-group">
			<div class="col-md-5">						
					<div class="row form-group">
						<div class="col-sm-12">
							<label for="">Sede1</label>
		    				<?php echo e(Form::select('sedes_id',$sedes,$contratistas->sedes_id,['id'=>'sedes_id','class'=>'form-control'])); ?>

		    			</div>
		    			<div class="col-sm-6">
							<label for="">Tipo se servicios</label>
	    					<?php echo e(Form::select('tiposervicios_id',$tiposervicios,$contratistas->tiposervicios_id,['id'=>'tiposervicios_id','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Nit</label>
							<?php echo e(Form::label('codigo',$contratistas->codigo,['id'=>'codigo', 'required','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Razón social</label>
							<?php echo e(Form::label('nombre',$contratistas->nombre,['id'=>'nombre', 'required','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Descripción</label>
							<?php echo e(Form::label('descripcion',$contratistas->descripcion,['id'=>'descripcion', 'required','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Departamento/estado</label>
	    					<?php echo e(Form::select('departamentos',$estados,$contratistas->estados,['id'=>'departamentos','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Ciudad</label>
	    					<?php echo e(Form::select('ciudades_id',$ciudades,$contratistas->ciudades_id,['id'=>'ciudades_id','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Dirección</label>
							<?php echo e(Form::label('direccion',$contratistas->direccion,['id'=>'direccion', 'required','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Teléfono</label>
							<?php echo e(Form::label('telefono',$contratistas->telefono,['id'=>'telefono', 'required','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Correo</label>
							<?php echo e(Form::email('correo',$contratistas->correo,['id'=>'correo', 'required','class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-6">
							<label for="">Dirección Web</label>
							<?php echo e(Form::url('web',$contratistas->web,['id'=>'web', 'required', 'class'=>'form-control'])); ?>

						</div>
						<div class="col-sm-12">
								<a href=<?php echo e(route('contratistas.index')); ?> class="btn btn-primary form-control">Volver</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>