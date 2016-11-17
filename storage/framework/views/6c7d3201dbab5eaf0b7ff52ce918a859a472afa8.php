<?php $__env->startSection('444'); ?>
    <?php echo Form::model($est,['route'=>['edo.update',$est->id],'method'=>'PUT']); ?>

    <?php echo $__env->make('estado.forms.file', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::submit('Actualizar',['class'=>'btn btn-primary btn-block']); ?>

    <?php echo Form::close(); ?>

    <br>
    <?php echo Form::open(['route'=>['edo.destroy',$est->id],'method'=>'DELETE']); ?>

    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

    <?php echo Form::close(); ?>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>