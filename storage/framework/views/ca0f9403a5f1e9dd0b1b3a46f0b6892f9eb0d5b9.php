<?php $__env->startSection('content'); ?>

<div>
	<style type="text/css" scoped="scoped">
    </style>
    
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<div class="row  form-group">
	<?php echo Form::model($user, ['route' => ['confirmardatos.update',$user->id],'method'=>'PUT','class'=>'wpcf7-form']); ?>

		<?php echo e(csrf_field()); ?>

		<div class="form-group">
			<label for="">Necesitamos que confirmes tus datos:</label>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Nombre y apellidos</label>
					<?php echo e(Form::text('name',$user->name,['id'=>'name','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required'])); ?>

				</div>
				<div class="col-sm-6">
					<label for="">Correo electrónico</label>
					<?php echo e(Form::email('email',$user->email,['id'=>'email','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required'])); ?>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Teléfono</label>
					<?php echo e(Form::tel('phone',$user->phone,['id'=>'phone','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required'])); ?>

				</div>
				<div class="col-sm-6">
					<label for="">Tipo de Documento</label>
					<?php echo e(Form::select('tipodocumento_id',$tipodocumento,$user->tipodocumento_id,['id'=>'tipodocumento_id','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required'])); ?>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="">Documento</label>
					<?php echo e(Form::text('documento',$user->documento,['id'=>'documento','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required'])); ?>


				</div>
				<div class="col-sm-6">
					<label for="">Fecha de nacimiento</label>
					<?php echo e(Form::date('fechanacimiento',$user->fechanacimiento,['id'=>'fechanacimiento','class'=>'form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required', 'required'])); ?>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 20px;">Registrar</button>
				</div>
			</div>
		</div>
		<p>
			<div class="checkbox">
			    <label>
			      <input type="checkbox" required="required" value="terminos" name="terminos"> Acepto los términos y condiciones de uso. Todos los datos suministrados son tratados de acuerdo la ley de Habeas Data, bajo el Decreto el 1377 de 2013
			    </label>
			</div>			
		</p>
	<?php echo e(Form::close()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>