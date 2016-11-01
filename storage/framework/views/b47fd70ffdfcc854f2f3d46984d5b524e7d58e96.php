<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route'=>'cdad.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('id_edo', $states,null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre de la Ciudad'); ?>

        <?php echo Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la ciudad']); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>