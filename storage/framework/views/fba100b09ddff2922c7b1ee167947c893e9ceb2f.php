<script type="text/javascript">
	$(document).ready(function() {
		$(".btnSolicitar").click(function(event) {
    		var _servicioscontratistas_id = $('input[type=hidden]', $(this).closest("div")).val();
    		var _nombre = $('label[class=nombre]', $(this).closest("div")).text();    		
    		var _contratista = $('label[class=contratista]', $(this).closest("div")).text();    		
    		$("#servicioContratista").val(_nombre);
    		$("#servicioscontratistas_id").val(_servicioscontratistas_id);
    		$("#contratista").val(_contratista);
    		$("#tablaServicios").empty();
    		$("#buscarServicio").val('');
			//console.log(_servicioscontratistas_id);
		});
	});
</script>
<div id="tablaServicios">
	<?php $__currentLoopData = $servicioscontratistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicioscontratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<div class="col-sm-3">		
				<p>
					<h4><label for="" class="nombre"><?php echo e($servicioscontratista->nombre.' '); ?></label>
					 <?php echo e('$'.number_format(($servicioscontratista->tarifaparticular),2, '.', ',')); ?></h4>
				</p>
				<p>
					<label for="" class="contratista"><?php echo e($servicioscontratista->contratista); ?></label>
				</p>												
				<p>
					<?php echo e(str_limit($servicioscontratista->descripcion,50,'...')); ?>		
				</p>
				<a href="#" class="btn btn-default a-btn-slide-text btnSolicitar"  title="Solicitar"><i class="fa fa-edit fa-lg"></i></a>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</tbody>
</table>
</div>