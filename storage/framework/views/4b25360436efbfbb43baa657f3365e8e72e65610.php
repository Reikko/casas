<?php $__env->startSection('welcome'); ?>
<div class="container">
    <div class="row">
        <?php if(Auth::guest()): ?>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenido</div>

                    <div class="panel-body">
                        Inicia Sesión para continuar...
                    </div>
                </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>