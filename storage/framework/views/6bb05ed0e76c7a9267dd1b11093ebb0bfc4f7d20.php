<?php $__env->startSection('content'); ?>

    <?php echo Form::model($des,['route'=>['des.update',$des->id],'method'=>'PUT']); ?>

    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('id_edo',$estados,$des->id_edo,['class'=>'form-control','id'=>'edo_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Ciudad:'); ?>

        <?php echo Form::select('id_cdad',$ciudades,$des->id_cdad,['class'=>'form-control','id'=>'cdad_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre del desarrollo:'); ?>

        <?php echo Form::text('nom_des', null,['class'=>'form-control','placeholder'=>'Nombre del desarrollo' ,'require' ]); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Tipos de desarrollo:'); ?>

        <?php echo Form::select('tipo', [
        '1'=>'Departamentos',
        '2'=>'Unifamiliar',
        '3'=>'Vivienda',
        '4'=>'Vivienda-Condominio',
        '5'=>'Mixto'],
        $des->tipo,['class'=>'form-control','id'=>'tipo_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Numero de Viviendas'); ?>

        <?php echo Form::text('unidades',null,['class'=>'form-control','placeholder'=>'Unidades habitacionales']); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>


    <?php echo Form::open(['route'=>['des.destroy',$des->id],'method'=>'DELETE']); ?>

    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>