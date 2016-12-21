<?php $__env->startSection('444'); ?>
    <?php echo Form::model($lugar,['route'=>['lugar.update',$lugar->id],'method'=>'PUT']); ?>

        <div class="form-group">
            <?php echo Form::label('Lugar:'); ?>

            <?php echo Form::text('nom_lugar',null,['class'=>'form-control','placeholder'=>'Nombre del lugar','required'=>'true']); ?>

        </div>
    <?php echo Form::submit('Actualizar',['class'=>'btn btn-primary btn-block']); ?>

    <?php echo Form::close(); ?>

    <br>
    <?php echo Form::open(['route'=>['lugar.destroy',$lugar->id],'method'=>'DELETE']); ?>

    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>