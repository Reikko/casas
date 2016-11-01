<?php $__env->startSection('content'); ?>
    <?php echo Form::model($call,['route'=>['calle.update',$call->id],'method'=>'PUT']); ?>

    <div class="form-group">
        <?php echo Form::label('ciudad:'); ?>

        <?php echo Form::select('id_cdad', $ciudades,null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('ciudad:'); ?>

        <?php echo Form::select('id_des', $desarrolls,$call->id,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre de la Calle'); ?>

        <?php echo Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']); ?>

    </div>
    <?php echo Form::submit('Editar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

    <?php echo Form::open(['route'=>['calle.destroy',$call->id,$call->id_des],'method'=>'DELETE']); ?>

    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>