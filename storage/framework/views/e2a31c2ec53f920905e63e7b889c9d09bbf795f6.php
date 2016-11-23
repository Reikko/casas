<?php $__env->startSection('completo'); ?>
    <?php if(Session::has('message')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>



    <h4>Asignada a: <?php echo e($duenio->nombre); ?> <?php echo e($duenio->ap_pat); ?> <?php echo e($duenio->ap_mat); ?></h4>
    <h4>Telefono: <?php echo e($duenio->tel); ?> </h4>
    <h4>Correo: <?php echo e($duenio->correo); ?> </h4>
    <h4>Usuario: <?php echo e($duenio->usuario); ?> </h4>

    <h4>Unidad Habitacional # <?php echo e($un->id); ?></h4>
    <h4>Calle: <?php echo e($un->id_calle); ?></h4>
    <h4>Numero Exterior: <?php echo e($un->num_ext); ?></h4>
    <h4>Numero Interior: <?php echo e($un->num_int); ?></h4>
    <h4>Tipo de casa: <?php echo e($un->tipo); ?></h4>
    <?php echo link_to_route('des.edit', $title = 'Agregar Usuario', $parameters = $duenio->id, $attributes = ['class'=>'btn btn-primary']); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>