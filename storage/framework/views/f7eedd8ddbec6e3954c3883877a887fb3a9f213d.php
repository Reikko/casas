<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route'=>'des.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Nombre del desarrollo:'); ?>

        <?php echo Form::text('id_des', null,['class'=>'form-control','placeholder'=>'Nombre del desarrollo']); ?>

        <br>
        <?php echo Form::submit('Guardar desarrollo',['class'=>'btn btn-primary']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Tipos de desarrollo:'); ?>

        <?php echo Form::select('id_edo', [
        '1'=>'Departamentos',
        '2'=>'Unifamiliar',
        '3'=>'Vivienda',
        '4'=>'Vivienda-Condominio',
        '5'=>'Mixto'],
        null,['class'=>'form-control','id'=>'tipo_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Numero de Viviendas'); ?>

        <?php echo Form::text('num_viviendas',null,['class'=>'form-control','placeholder'=>'Unidades habitacionales']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('id_edo', [],null,['class'=>'form-control', 'id'=>'colony_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Ciudad:'); ?>

        <?php echo Form::select('id_col', [],null,['class'=>'form-control', 'id'=>'colony_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Calle/s'); ?>

        <?php echo Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Direccion'); ?>

        <?php echo Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>