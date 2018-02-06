<?php $__env->startSection('page_header'); ?>        
    <h1> <i class="voyager-list"></i> Solicitudes pendientes</h1> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="wpcf7-form">
	<div class="row form-group">
		<div class="col-sm-10">		
					<table class="table">
						<tbody>
						<?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>				
								<td>
									<span style="font-size: 1.3em; color: #ffffff"><strong><?php echo e($solicitud->servicio); ?></strong></span>
									<p>
										<span style="color: #ffffff"><i class="fa fa-calendar fa-lg"></i> <?php echo e($solicitud->fecha.' '.$solicitud->hora.' '); ?>/ <?php echo e($solicitud->contratista.' '); ?></span> 
									</p>
								</td>									
								<td>
									<?php if($solicitud->estadosolicitudes_id==6): ?>
									<a href=<?php echo e(route('pagos.show',Crypt::encrypt($solicitud->id))); ?> class="btn btn-info btn-lg" title="Generar pago"><i class="fa fa-dollar fa-lg" ></i>Genear Pago</a>
									<?php else: ?>
										<span style="color: #ffffff"><?php echo e($solicitud->estado); ?></span>
									<?php endif; ?>
								</td>	
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
						</tbody>
					</table>	
		</div>
	</div>	
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>