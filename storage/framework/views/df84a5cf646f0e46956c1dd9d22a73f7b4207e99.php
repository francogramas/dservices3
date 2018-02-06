<?php $__env->startSection('content'); ?>  
<div class="">
    <div class="row">
        <div class="col-md-10">

            <div>
                <div><span style="font-weight: bold; color: #ffffff;">Para continuar debes ser usuario, si eres nuevo registra tus datos o ingresa con tu facebook.</span></div>
                <div>
                    <form role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Correo Electrónico" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">                            
                                <button type="submit"  class="form-control btn btn-primary">
                                    <i class="fa fa-sign-in"></i>Entrar                                
                                </button>   
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo e(url('/auth/facebook')); ?>" class="form-control btn btn-primary">
                                    <i class="fa fa-facebook"></i>Entrar con facebook
                                </a>
                            </div>
                            <div class="col-md-4">                            
                                <a href="<?php echo e(url('/register')); ?>" class="form-control btn btn-primary">
                                    <i class="fa fa-users"></i>Nuevo Usuario
                                </a>        
                             </div>
                            </div>
                            <div class="col-md-12">
                              <a href="<?php echo e(url('/password/reset')); ?>" style="font-weight: bold; color: #ffffff;">¿Olvidaste tu contraseña?</a>
                            </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">                                

                                </div>                                
                            </div>
                        </div>
                    </div>                                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>