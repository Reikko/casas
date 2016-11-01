<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <h1>Ciudades Registradas </h1>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Editar</th>
        <th>Ver</th>
        </thead>
        <?php foreach($ciudades as $ciudad): ?>
            <tbody>
            <td><?php echo e($ciudad->id); ?></td>
            <td><?php echo e($ciudad->nom_edo); ?></td>
            <td><?php echo e($ciudad->nom_cdad); ?></td>
            <td>
                <?php echo link_to_route('cdad.edit', $title = 'Editar', $parameters = $ciudad->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('cdad.show', $title = 'Ver Desarrollos', $parameters = $ciudad->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>