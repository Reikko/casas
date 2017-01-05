<?php $__env->startSection('444'); ?>
    <h3>Datos del Cliente</h3>
    <?php echo Form::open(['route'=>'client.store','method'=>'POST']); ?>


    <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
        <label for="nombre" class="control-label">Nombre(s)</label>
            <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo e(old('nombre')); ?> " >
            <?php if($errors->has('nombre')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('nombre')); ?></strong>
                </span>
            <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('ap_pat') ? ' has-error' : ''); ?>">
        <label for="ap_pat" class="control-label">Apellido paterno</label>
        <input id="ap_pat" type="text" class="form-control" name="ap_pat" value="<?php echo e(old('ap_pat')); ?> " >
        <?php if($errors->has('ap_pat')): ?>
            <span class="help-block">
                    <strong><?php echo e($errors->first('ap_pat')); ?></strong>
                </span>
        <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('ap_mat') ? ' has-error' : ''); ?>">
        <label for="ap_mat" class="control-label">Apellido materno</label>
        <input id="ap_mat" type="text" class="form-control" name="ap_mat" value="<?php echo e(old('ap_mat')); ?> " >
        <?php if($errors->has('ap_mat')): ?>
            <span class="help-block">
                    <strong><?php echo e($errors->first('ap_mat')); ?></strong>
                </span>
        <?php endif; ?>
    </div>


    <div class="form-group">
        <?php echo Form::label('Telefono'); ?>

        <?php echo Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']); ?>

    </div>
    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="email" class="control-label">Correo electronico</label>
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" >
            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <label for="name" class="control-label">Nombre de Usuario</label>
        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?> " >
        <?php if($errors->has('name')): ?>
            <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
        <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label for="password" class="control-label">Password</label>
            <input id="password" type="password" class="form-control" name="password">
            <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
    </div>
    <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
        <label for="password-confirm" class="control-label">Confirmar Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            <?php if($errors->has('password_confirmation')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </span>
            <?php endif; ?>
    </div>


    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>