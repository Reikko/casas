<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
$var = 0;
<?php $__env->startSection('content'); ?>
    <button><?php echo link_to('calle/edit', $title = 'Editar Unidades'); ?></button>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Asignada</th>
        <th>Editar</th>
        </thead>

        <?php $var = 0 ?>

        <?php foreach($propiedades as $propiedad): ?>
            <?php echo e($var++); ?>

            <tbody>
            <td><?php echo e($var); ?></td>
            <td><?php echo e($propiedad->nom_calle); ?></td>
            <td><?php echo e($propiedad->num_ext); ?></td>
            <td><?php echo e($propiedad->num_int); ?></td>
            <td><?php echo e($propiedad->asignada); ?></td>
            <td><?php echo e($propiedad->editable); ?></td>
            </tbody>
        <?php endforeach; ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>