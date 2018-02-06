<?php $__env->startSection('content'); ?>

<style type="text/css" scoped="scoped">
    .fusion-button .button-3 .fusion-button-text, .fusion-button.button-3 i {
        color:#ffffff;
        }
        .fusion-button.button-3 {
            border-width:0px;
            border-color:#ffffff;
            font-size: 7pt;
            }
        .fusion-button .button-3 .fusion-button-icon-divider{
            border-color:#ffffff;
            }
        .fusion-button.button-3:hover .fusion-button-text, .fusion-button.button-3:hover i,.fusion-button.button-3:focus .fusion-button-text, .fusion-button.button-3:focus i,.fusion-button.button-3:active .fusion-button-text, .fusion-button.button-3:active{
            color:#ffffff;
            }
        .fusion-button .button-3:hover, .fusion-button .button-3:focus, .fusion-button .button-3:active{
            border-width:0px;border-color:#ffffff;
            }
        .fusion-button.button-3:hover .fusion-button-icon-divider, .fusion-button.button-3:hover .fusion-button-icon-divider, .fusion-button.button-3:active .fusion-button-icon-divider{
            border-color:#ffffff;
            }
        .fusion-button.button-3{
            background: #3498db;
            }
        .fusion-button.button-3:hover,.button-3:focus,
        .fusion-button.button-3:active{
            background: #2980b9;
            }
        .fusion-button.button-3{
            width:auto;
        }
    </style>
     <form class="wpcf7-form" method="post" action="https://sandbox.gateway.payulatam.com/ppp-web-gateway/">
     	<div class="row">
     		<div class="col-sm-4">
     			<p>
     				<!-- Campos Ccultos -->
     				<input type="hidden" name="merchantId" value="508029">
     				<input type="hidden" name="referenceCode" value=<?php echo e('DSVIP'.$solicitudes->id); ?>>
     				<input type="hidden" name="description" value=<?php echo e($servicio->descripcion); ?>>
     				<input type="hidden" name="amount" value=<?php echo e($solicitudes->valor); ?>>
     				<input type="hidden" name="tax" value="0">
     				<input type="hidden" name="taxReturnBase" value="0">
     				<input type="hidden" name="signature" value="<?php echo e(hash('md5', '4Vj8eK4rloUd272L48hsrarnUA'.'~'.'508029'.'~'.'DSVIP'.$solicitudes->id.'~'.$solicitudes->valor.'~'.'COP' )); ?>">
                    <input type="hidden" name="test" value="1"> 
     				<input type="hidden" name="accountId" value="512321">
     				<input type="hidden" name="currency" value="COP">
     				<input type="hidden" name="buyerFullName" value=<?php echo e($Usuario->name); ?>>
     				<input type="hidden" name="buyerEmail" value=<?php echo e($Usuario->email); ?>>
     				<input type="hidden" name="shippingAddress" value="No Aplica">
     				<input type="hidden" name="shippingCity" value='Sincelejo'>
     				<input type="hidden" name="shippingCountry" value='COL'>
                    <input type="hidden" name="telephone" value=<?php echo e($Usuario->phone); ?>>
                    <input name="responseUrl" type="hidden" value=<?php echo e(url('pagosrespuesta')); ?> >
                    <input name="confirmationUrl" type="hidden" value=<?php echo e(url('pagosconfirmacion')); ?> >
     			</p>
     			
     			<!-- Campos Visibles -->     			
     			<p>
     				<label for="">Nombres:</label>
     				<?php echo e($Usuario->name); ?>     				
     			</p>
     			<p>
     				<label for="">Servicio/Producto</label>
     				<?php echo e($servicio->nombre); ?>     				
     			</p>
     			<p>
     				<label for="">Valor</label>
     				<?php echo e($solicitudes->valor); ?>

     			</p>
     			<p>
     				<input type="submit" value="Pagar con PayU" class="btn btn-primary btn-lg">
     			</p>
     		</div>
     		<div class="col-sm-4"></div>
     		<div class="col-sm-4"></div>
     	</div>
     </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>