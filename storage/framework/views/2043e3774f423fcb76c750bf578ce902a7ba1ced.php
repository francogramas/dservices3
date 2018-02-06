<?php $__env->startSection('page_header'); ?>        
    <h1> <i class="voyager-bubble-hear"></i> Nuestros servicios</h1> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
	$( document ).ready(function() {
    	$("#serviciosContratistas").autocomplete({
      source: "/buscar/servicioscontratistasLista",
      minLength: 1,
      select: function(event, ui) {
        $('#serviciosContratistas').val(ui.item.value);
        $('#servicioscontratistas_id').val(ui.item.id);
      }
   });

    $("#serviciosContratistas").click(function(){
       $("#serviciosContratistas").val("");
       $("#servicioscontratistas_id").val("0");                 
    });
	});
</script>
<div class="row">
    <div class="col-sm-12">
        <div class="row">
	        <div class="form-group">
                <input id="serviciosContratistas" type="text" class="form-control" placeholder="Buscar en nuestra red de servicios">
                <input type="hidden" id="servicioscontratistas_id">
             </div>
        </div>
    </div>
</div>
<div class="row">
	<div id="tablaServicios">
	<?php $__currentLoopData = $servicioscontratistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicioscontratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<div data-animationtype="fadeInUp" data-animationduration="0.2" data-animationoffset="100%" class="col-md-3" style="margin-left: 5px; margin-top: 5px; margin-bottom: 10px; visibility: visible; animation-duration: 0.2s;">
		<div class="fusion-column-wrapper" style="background-color:rgba(59,175,191,0.45);padding: 9% 7%;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
			<div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-three fusion-border-below-title" style="margin-top:0px;margin-bottom:0px;">
				<h4 class="title-heading-center" data-fontsize="22" data-lineheight="48"><span style="color: #ffffff;"><i class="fa fa-info-circle"></i> <?php echo e($servicioscontratista->contratista); ?> </span></h4>
			</div>
		<div class="fusion-sep-clear"></div>
			<div class="fusion-separator fusion-full-width-sep sep-single sep-solid" style="border-color:#3bafbf;border-top-width:4px;margin-left: auto;margin-right: auto;margin-top:3px;"></div>
			<div class="table-3">
				<table width="100%">
					<tbody>
						<tr>
							<td style="text-align: left;"><span style="color: #ffffff; font-size: 14px;"><strong><?php echo e($servicioscontratista->nombre.' '); ?></strong></span></td>
						</tr>
						<tr>
							<td style="text-align: left;"><span style="color: #ffffff; font-size: 14px;"><strong>Tarifa VIP: <?php echo e('$'.number_format(($servicioscontratista->tarifaparticular),2, '.', ',')); ?></strong></span></td>
						</tr>																						
						<tr>
							<td style="text-align: left;"><span style="color: #ffffff; font-size: 14px;"><strong>Dirección: </strong></span></td>
						</tr>											
					</tbody>
				</table>
			</div>
			<div class="fusion-sep-clear"></div>
			<div class="fusion-separator fusion-full-width-sep sep-none" style="margin-left: auto;margin-right: auto;margin-top:10px;margin-bottom:10px;"></div>
			<div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-three fusion-border-below-title" style="margin-top:0px;margin-bottom:0px;">
				<a href=<?php echo e(route('solicitudes.show',$servicioscontratista->id)); ?> style="width: 100%" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>Solicitar</a>
			</div>
			<div class="fusion-clearfix"></div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>			    		
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>