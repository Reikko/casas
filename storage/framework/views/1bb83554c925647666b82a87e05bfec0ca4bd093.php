<?php $__env->startSection('444'); ?>
    <h3>Creando cuadrilla</h3>
    <?php echo Form::open(['route'=>'cuadrilla.store','method'=>'POST']); ?>


    <div class="form-group<?php echo e($errors->has('encargado') ? ' has-error' : ''); ?>">
        <label for="encargado" class="control-label">Encargado</label>
        <input id="encargado" type="text" class="form-control" name="encargado" value="<?php echo e(old('encargado')); ?>" >
        <?php if($errors->has('encargado')): ?>
            <span class="help-block">
                    <strong><?php echo e($errors->first('encargado')); ?></strong>
                </span>
        <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
        <label for="nombre" class="control-label">Nombre de la cuadrilla</label>
        <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo e(old('nombre')); ?>" >
        <?php if($errors->has('nombre')): ?>
            <span class="help-block">
                    <strong><?php echo e($errors->first('nombre')); ?></strong>
                </span>
        <?php endif; ?>
    </div>

    <?php echo Form::submit('Crear cuadrilla',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>