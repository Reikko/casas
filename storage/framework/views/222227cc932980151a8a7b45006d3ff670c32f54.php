<?php $__env->startSection('content'); ?>

    <?php echo Form::open(['route'=>'calle.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('ciudad:'); ?>

        <?php echo Form::select('id_cdad', $ciudades,null,['class'=>'form-control','id'=>'calle_cdad_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('desarrollo:'); ?>

        <?php echo Form::select('id_des', $desarrolls,null,['class'=>'form-control','id'=>'des_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre de la Calle'); ?>

        <?php echo Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>