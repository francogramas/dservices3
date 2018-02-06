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
    <div class="row">
        <div class="col-sm-4">
            <?php echo e(strtoupper($firma).'---------'. strtoupper($firmacreada)); ?>

            <?php if(strtoupper($firma)==strtoupper($firmacreada)): ?>
                Estimado <?php echo e(Auth::user()->name); ?> el estado de su pago es: <?php if($respuesta->transactionState==4): ?>
                    <?php echo e('Aprobado'); ?>

                <?php elseif($respuesta->transactionState==5): ?>
                    <?php echo e('Expirada'); ?>

                <?php elseif($respuesta->transactionState==6): ?>
                    <?php echo e('Rechazado'); ?>

                <?php elseif($respuesta->transactionState==7): ?>
                    <?php echo e('Pendiente'); ?>

                <?php elseif($respuesta->transactionState==104 ): ?>
                    <?php echo e('Se generó un error'); ?>

                <?php else: ?>
                    <?php echo e($respuesta->message); ?>

                <?php endif; ?>
            <?php else: ?>
                Las firmas no corresponden
            <?php endif; ?>            
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>