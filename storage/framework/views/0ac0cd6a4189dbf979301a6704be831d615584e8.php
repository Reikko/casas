<?php $__env->startSection('444'); ?>
    <h1>Tipo <?php echo e($tipo->nom_defecto); ?></h1>
    <?php echo Form::open(['route'=>'tipofallo.store','method'=>'POST']); ?>

    <?php echo e(Form::hidden('id_t_defecto',$tipo->id)); ?>

    <div class="form-group">
        <?php echo Form::label('Descripcion:'); ?>

        <?php echo Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required'=>'true']); ?>

    </div>
    <?php echo Form::submit('Agregar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>