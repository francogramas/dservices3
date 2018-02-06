<?php $__env->startSection('content'); ?>

<?php echo e(Form::open(['route' => 'usuarios.store','method'=>'POST'])); ?>	
	<?php echo e(csrf_field()); ?>

	<h3>Registar Administradores</h3>
	<div class="row"> 
        <div class="col-md-6" style="padding-right: 15px;">
            <div class=" row form-group">
                    <label for="name" class="control-label">Nombres y apellidos</label>  
                    <?php echo e(Form::hidden('role_id','1',['id'=>'role_id'])); ?>

                    <?php echo e(Form::hidden('users_id','0',['id'=>'users_id'])); ?>

                    <?php echo e(Form::text('name',null,['id'=>'name', 'required', 'class'=>'form-control'])); ?>

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
            </div>
            <div class="row form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">                
                    <label for="email" class="control-label">E-Mail</label>
                    <?php echo e(Form::email('email',null,['id'=>'email', 'required', 'class'=>'form-control'])); ?>                    
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
            </div>
            <div class="row form-group">
	            	<label for="">Sede</label>
		    		<?php echo e(Form::select('sedes_id',$sedes,null,['id'=>'sedes_id','class'=>'form-control'])); ?>

            </div>
            <div class="row form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <label for="password" class="control-label">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
            </div>
            <div class="row form-group">
                    <label for="password-confirm" class="control-label">Confirmar contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>            
            <div class="row form-group">
                    <label for="password" class="control-label"><br></label>                    
                    <button type="submit" style="width: 100%"  class="btn btn-primary form-control">
                    	<i class="fa fa-check fa-lg">Registrar</i>                                
                    </button>
            </div>
        </div>
        <div class="col-md-6">
        	<table class="table">
        		<thead>
        			<tr>
        				<th>Usuario</th>
        				<th>Sede</th>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        				<tr>
	        				<td>
	        					<?php echo e($user->name); ?>

	        				</td>
	        				<td>
	        					<?php echo e($user->ciudad); ?>

	        				</td>
	        				<td>
	        					<a href=<?php echo e(route('usuarios.edit',$user->id)); ?> class="btn btn-primary btn-xs"  title="Editar"><span class="fa fa-edit fa-lg" aria-hidden="true"></span></a>
	        				</td>
	        			</tr>
        			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>        			
        		</tbody>
        	</table>
        </div>
    </div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.superadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>