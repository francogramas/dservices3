<?php $__env->startSection('page_header'); ?>        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="wpcf7-form">
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
    <div class="row">
        <div class="col-md-12">
            <h2> <span style="color:#ffffff;"><i class="fa fa-map-marker fa-2x"></i>¿En qué ciudad te encuentras?</span></h2> 
        </div>
    </div>
<div class="row form-group">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">           
        <div class="row"> 
            <?php $__currentLoopData = $sedes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sede): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="col-sm-3 form-group" >
                        <a href=<?php echo e(route('sedesu.show',$sede->id)); ?> style="width: 100%" class="btn btn-info btn-lg">
                            <span class="fusion-button-text"><?php echo e($sede->name); ?></span>
                        </a>                                        
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>                
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>