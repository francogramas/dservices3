<?php $__env->startSection('content'); ?>

<?php echo e(Form::model($user, ['route' => ['usuarios.update',$user->id],'method'=>'PUT'])); ?>

	<?php echo e(csrf_field()); ?>

	<h3>Registar Administradores</h3>
	<div class="row"> 
        <div class="col-md-6" style="padding-right: 15px;">
            <div class="row form-group">
                    <label for="name" class="control-label">Nombres y apellidos</label>  
                    <?php echo e(Form::text('name',$user->name,['id'=>'name', 'required', 'class'=>'form-control'])); ?>

            </div>
            <div class="row form-group">                
                    <label for="email" class="control-label">E-Mail</label>
                    <?php echo e(Form::email('email',$user->email,['id'=>'email', 'required', 'class'=>'form-control'])); ?>                    
            </div>
            <div class="row form-group">
	            	<label for="">Sede</label>
		    		<?php echo e(Form::select('sedes_id',$sedes,null,['id'=>'sedes_id','class'=>'form-control'])); ?>

            </div>            
            <div class="row form-group">
                    <button type="submit" style="width: 100%"  class="btn btn-primary form-control">
                    	<i class="fa fa-check fa-lg">Actualizar</i>                                
                    </button>
            </div>
        </div>
    </div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>