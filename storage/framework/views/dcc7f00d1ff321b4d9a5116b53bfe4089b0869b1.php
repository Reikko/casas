<?php $__env->startSection('completo'); ?>
    <div class="col-sm-4" >
    </div>

    <div class="row col-sm-4">

        <h3>CREANDO NUEVA CIUDAD</h3>
        <?php echo Form::open(['route'=>'cdad.store','method'=>'POST']); ?>

        <div class="form-group">
            <?php echo Form::select('id_edo',$estados,null,['class'=>'form-control','id'=>'edo_sel','required'=>'true']); ?>

            <?php echo Form::label('Nombre de la Ciudad',null,['class'=>'control-label']); ?>

            <?php echo Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la ciudad','required'=>'true']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
    <div class="col-sm-4">
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>