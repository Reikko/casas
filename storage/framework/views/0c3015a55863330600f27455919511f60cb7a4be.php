<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <h1>Ciudades de <?php echo e($estad->nom_edo); ?></h1>
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Ciudades</th>
        <th>Modificar</th>
        <th>Ver</th>
        </thead>
        <?php foreach($ciu as $c): ?>
            <tbody>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->nom_cdad); ?></td>
            <td>
                <?php echo link_to_route('cdad.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('cdad.show', $title = 'Ver Desarrollos', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>