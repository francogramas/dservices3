<?php $__env->startSection('content'); ?>
<?php echo e(Form::open(['route' => 'configuracion.store','method'=>'POST'])); ?>	

<h3>Configuración general</h3>
<div class="row">
	<div class="col-sm-4">
		<label for="">Valor de Tarifa</label>
		<?php echo e(Form::text('valor_tarifa',null,['id'=>'valor_tarifa', 'required', 'class'=>'form-control'])); ?>

	</div>
	<div class="col-sm-4">
		<label for="">Iva</label>
		<?php echo e(Form::text('iva',null,['id'=>'iva', 'required', 'class'=>'form-control'])); ?>		
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<label for="">Valor del porcentaje pago</label>
		<?php echo e(Form::text('valor_porcentaje_pago',null,['id'=>'valor_porcentaje_pago', 'required', 'class'=>'form-control'])); ?>

	</div>
	<div class="col-sm-4">
		<label for="">Valor fijo de pago</label>
		<?php echo e(Form::text('valor_fijo_pago',null,['id'=>'valor_fijo_pago', 'required', 'class'=>'form-control'])); ?>		
	</div>
</div>
<h4>Datos de PayU</h4>
<div class="row">
	<div class="col-sm-4">
		<label for="">merchantId</label>
		<?php echo e(Form::text('merchantId',null,['id'=>'merchantId', 'required', 'class'=>'form-control'])); ?>		
	</div>
	<div class="col-sm-4">
		<label for="">signature</label>
		<?php echo e(Form::text('signature',null,['id'=>'signature', 'required', 'class'=>'form-control'])); ?>		
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<label for="">accountId</label>
		<?php echo e(Form::text('accountId',null,['id'=>'accountId', 'required', 'class'=>'form-control'])); ?>				
	</div>
	<div class="col-sm-4">
		<label for="">shippingCountry</label>
		<?php echo e(Form::text('shippingCountry',null,['id'=>'shippingCountry', 'required', 'class'=>'form-control'])); ?>				
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<label for=""><br></label>
		<input type="submit" value="Guardar" class="btn btn-primary">
	</div>
	<div class="col-sm-4">
		<label for=""></label>
	</div>
</div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>