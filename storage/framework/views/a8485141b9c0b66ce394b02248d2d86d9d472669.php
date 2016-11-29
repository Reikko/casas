<?php $__env->startSection('completo'); ?>
    <div class="container-fluid">
        <h2>Registro de Propiedad</h2>
        <?php echo Form::open(['action'=>'UnaControl@showDireccion']); ?>

        <div class="form-group">
            <?php echo Form::label('Codigo Postal',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo Postal','required' => 'required','id'=>'codigo']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::button('Buscar',['class'=>'form-control','placeholder'=>'Ciudad','required' => 'required','onClick'=> 'getCodigoPostal()']); ?>

            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>