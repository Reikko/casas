<?php $__env->startSection('444'); ?>
    <!--
        Muestra unicamente cuantas queremos crear.
    -->
    <h2>Registrando propiedad</h2>
    <?php echo link_to_route('nuevas.show','Unica',1,  ['class'=>'btn btn-primary btn-block']); ?>

    <?php echo link_to_route('nuevas.show','Varias',2,  ['class'=>'btn btn-primary btn-block']); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>