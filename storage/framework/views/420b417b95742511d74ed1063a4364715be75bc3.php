<?php $__env->startSection('content'); ?>
<div class="container">
		<div class="row">
			<div class="col-sm-7">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
			<h4><span class="texto">Solicitudes pendientes</h4>
				<div id="tablaSolicitudes">
					<table class="table">
						<thead>
							<tr>
								<td>								
								</td>
								<td class="texto"><b>Usuario</b></td>
								<td class="texto"><b>Servicio</td>
								<td class="texto"><b>Prestador</td>
								<td class="texto"><b>Fecha/hora</td>
							</tr>
						</thead>
						<tbody>
						<?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>
								<td>
									<a href="#" class="fusion-button button-flat fusion-button-round button-large button-custom button-10 SolicitudId"><span class="fa fa-edit fa-lg" aria-hidden="true"></span></a>
									<input type="hidden" value=<?php echo e($solicitud->id); ?>>								
								</td>
								<td class="texto1"><?php echo e($solicitud->name); ?></td>
								<td class="texto1"><?php echo e($solicitud->servicio); ?></td>
								<td class="texto1"><?php echo e($solicitud->contratista); ?></td>
								<td class="texto1"><?php echo e($solicitud->fecha.' '.$solicitud->hora); ?></td>							
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>					
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-4">
				<div id="detalleSolicitud"></div>
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-7"></div>
		</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>