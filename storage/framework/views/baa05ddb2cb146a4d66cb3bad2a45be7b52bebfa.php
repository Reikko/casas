<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('completo'); ?>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Usuario</th>

        <th>Operacion</th>
        </thead>
        <?php foreach($clients as $client): ?>
            <tbody>
            <td><?php echo e($client->id); ?></td>

            <td><?php echo e($client->nombre, $client->ap_pat); ?> <?php echo e($client->ap_pat); ?> <?php echo e($client->ap_mat); ?></td>
            <td><?php echo e($client->tel); ?></td>
            <td><?php echo e($client->correo); ?></td>
            <td><?php echo e($client->usuario); ?></td>
            <td>
                <?php echo link_to_route('client.edit', $title = 'Editar', $parameters = $client->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>