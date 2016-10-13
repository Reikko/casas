<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Estado</th>
        <th>Modificar</th>
        <th>Ver</th>
        </thead>
        <?php foreach($estados as $estado): ?>
            <tbody>
            <td><?php echo e($estado->id); ?></td>
            <td><?php echo e($estado->nom_edo); ?></td>
            <td>
                <?php echo link_to_route('edo.edit', $title = 'Editar', $parameters = $estado->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('edo.show', $title = 'Ver Ciudades', $parameters = $estado->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>