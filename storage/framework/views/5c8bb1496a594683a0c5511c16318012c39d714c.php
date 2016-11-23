<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('completo'); ?>
    <h1>Calles del Desarrollo  <?php echo e($des->nom_des); ?></h1>

    <table class="table">
        <thead>
        <th><?php echo link_to_route('calle.create', $title = 'Agregar Calle', $parameters = $des->id, $attributes = ['class'=>'btn btn-success']); ?></th>
        <th>nombre</th>
        <th>Editar</th>

        </thead>
        <?php foreach($calles as $c): ?>
            <tbody>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->nom_calle); ?></td>
            <td>
                <?php echo link_to_route('des.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            <td>
                <?php echo link_to_route('calle.create', $title = 'Agregar Calle', $parameters = $c->id, $attributes = ['class'=>'btn btn-success']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>