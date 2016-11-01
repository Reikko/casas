<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <h1>Desarrollos de <?php echo e($ciu->nom_cdad); ?></h1>
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Desarrollo</th>
        <th>Modificar</th>
        <th>Ver Calles</th>
        <th>Ver Unidades</th>
        </thead>
        <?php foreach($dess as $d): ?>
            <tbody>
            <td><?php echo e($d->id); ?></td>
            <td><?php echo e($d->nom_des); ?></td>
            <td>
                <?php echo link_to_route('des.edit', $title = 'Editar', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('calle.show', $title = 'Ver Calles', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('propiedad.show', $title = 'Ver Unidades', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>