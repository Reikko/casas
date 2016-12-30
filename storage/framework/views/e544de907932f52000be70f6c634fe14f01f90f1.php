<?php $__env->startSection('363'); ?>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>

        <h1>Defecto tipo: <?php echo e($tipo->nom_defecto); ?></h1>
        <div class="row">
            <div class="col-sm-4" >
            </div>
            <div class="col-sm-4" >
                <?php echo link_to('fallo', $title = 'Regresar',['class'=>'btn btn-default btn-block']); ?>

            </div>
            <div class="col-sm-4" >
                <?php echo link_to('tipofallo/'.$tipo->id.'/create', $title = 'Crear nuevo',['class'=>'btn btn-success btn-block']); ?>

            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Ver</th>
            </tr>
            </thead>
            <?php foreach($lugares as $lugar): ?>
                <tbody>
                <tr>
                    <td><?php echo e($lugar->descripcion); ?></td>
                    <td>
                        <?php echo link_to_route('tipofallo.edit','Editar',$lugar->id,['class'=>'btn btn-warning btn-block']); ?>

                    </td>
                    <td>
                        <?php echo Form::open(['route'=>['tipofallo.destroy',$lugar->id],'method'=>'DELETE']); ?>

                        <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>

                </tbody>
            <?php endforeach; ?>
        </table>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>