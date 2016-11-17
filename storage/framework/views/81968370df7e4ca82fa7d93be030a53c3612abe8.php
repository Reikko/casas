<?php $__env->startSection('444'); ?>
    <h3>Datos del Cliente</h3>
    <?php echo Form::open(['route'=>'client.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Nombre:'); ?>

        <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Cliente']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Apellido Paterno:'); ?>

        <?php echo Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Apellido Materno:'); ?>

        <?php echo Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Telefono'); ?>

        <?php echo Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Correo:'); ?>

        <?php echo Form::text('correo',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Password:'); ?>

        <?php echo Form::password('contra',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>