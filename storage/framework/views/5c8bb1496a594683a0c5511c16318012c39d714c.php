<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <h1>Calles del Desarrollo  <?php echo e($des->nom_des); ?></h1>
    <table class="table">
        <thead>
        <th>#</th>
        <th>nombre</th>
        <th>Numero Ext</th>
        <th>Numero Int</th>

        </thead>
        <?php foreach($calles as $c): ?>
            <tbody>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->nom_cdad); ?></td>
            <td>
                <?php echo link_to_route('call.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('call.edit', $title = 'Asignar Cliente', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>