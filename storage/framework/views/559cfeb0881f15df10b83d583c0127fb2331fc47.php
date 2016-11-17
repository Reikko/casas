<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('363'); ?>
    <h1>Calles Registradas en <?php echo e($desa->nom_des); ?></h1>
    <div class="form-group">
        <button><?php echo link_to('calle/create/'.$desa->id, $title = 'Crear Calle o Edificio'); ?></button>
    </div>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Ciudad</th>
        <th>Fraccionamiento</th>
        <th>Nombre Calle</th>
        <th>Editar</th>
        </thead>
        <?php foreach($calls as $c): ?>
            <tbody>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->nom_cdad); ?></td>
            <td><?php echo e($c->nom_des); ?></td>
            <td><?php echo e($c->nom_calle); ?></td>
            <td>
                <?php echo link_to_route('calle.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary']); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>