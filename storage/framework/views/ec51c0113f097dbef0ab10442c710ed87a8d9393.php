<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('completo'); ?>
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Estado</th>
        <th>Calle colonia</th>
        <th>Tipo</th>
        <th>Ver Propiedad</th>
        <th>Editar</th>
        </thead>

        <?php foreach($casas as $casa): ?>
            <tbody>
                <tr class="success">
                    <td><?php echo e($casa->id); ?></td>
                    <td><?php echo e($casa->municipio); ?>,<?php echo e($casa->estado); ?> </td>
                    <td> <?php echo e($casa->calle); ?> #<?php echo e($casa->num_ext); ?>, <?php echo e($casa->tipo); ?>:<?php echo e($casa->asentamiento); ?></td>
                    <td><?php echo e($casa->tipo_prop); ?></td>
                    <td><?php echo link_to_route('nuevas.show','Ver Propiedad', $casa->id, ['class'=>'btn btn-primary']); ?></td>
                    <td><?php echo link_to_route('nuevas.edit','Editar', $casa->id, ['class'=>'btn btn-primary']); ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>