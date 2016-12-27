<?php $__env->startSection('363'); ?>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <table class="table">
            <thead>
            <!--<th>Num</th>-->
            <th>Lugar</th>
            <th>Modificar</th>
            <th>Ver</th>
            </thead>
            <?php foreach($lugares as $lugar): ?>
                <tbody>
                <!--<td><?php echo e($lugar->id); ?></td>-->
                <td><?php echo e($lugar->nom_lugar); ?></td>
                <td>
                    <?php echo link_to_route('lugar.edit','Editar',$lugar->id,['class'=>'btn btn-warning btn-block']); ?>

                </td>
                <td>
                    <?php echo Form::open(['route'=>['lugar.destroy',$lugar->id],'method'=>'DELETE']); ?>

                    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

                    <?php echo Form::close(); ?>

                </td>
                </tbody>
            <?php endforeach; ?>
        </table>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>