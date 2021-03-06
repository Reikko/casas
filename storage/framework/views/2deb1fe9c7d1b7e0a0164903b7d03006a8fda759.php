<?php $__env->startSection('444'); ?>
    <h3>Ingreso</h3>
    <?php echo Form::open(['route'=>'avance.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Cuadrilla:'); ?>

        <?php echo Form::select('id_cuadrilla',$cuadrillas,null,['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('Lotes:'); ?>

        <?php echo Form::select('id_lote',$lotes,null,['class'=>'form-control','id'=>'lote']); ?>

    </div>


    <div class="col-sm-6">
        <?php echo Form::label('Fecha inicial'); ?>

        <input type="date" name="f_ini" class="form-control" value=<?php echo e($fecha); ?>>
    </div>
    <div class="col-sm-6">
        <?php echo Form::label('Fecha inicial'); ?>

        <input type="date" name="f_fin" class="form-control" value=<?php echo e($fecha->addDays(7)); ?>>
    </div>

    <?php echo Form::submit('Agregar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>