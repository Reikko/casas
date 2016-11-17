<?php $__env->startSection('444'); ?>
    <?php echo $__env->make('modal.cdad', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <h3>Creando Desarrollo</h3>
    <?php echo Form::open(['route'=>'des.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Estado:'); ?>

        <?php echo Form::select('id_ed',$estados,null,['class'=>'form-control','id'=>'edo_sel','required'=>true]); ?>

        <?php echo Form::button('Agregar Estado',[
            'class'=>'form-control btn btn-info btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modEstado',
            'data-backdrop'=>'static' ]); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Ciudad:'); ?>

        <?php echo Form::select('id_cdad',$ciudades,null,['class'=>'form-control','id'=>'cdad_sel']); ?>

        <?php echo Form::button('Agregar Ciudad',[
            'class'=>'form-control btn btn-info btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modCiudad',
            'data-backdrop'=>'static' ]); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Nombre del desarrollo:'); ?>

        <?php echo Form::text('nom_des', null,['class'=>'form-control','placeholder'=>'Nombre del desarrollo' ,'required'=>true ]); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Tipos de desarrollo:'); ?>

        <?php echo Form::select('tipo', [
        '1'=>'Departamentos',
        '2'=>'Unifamiliar',
        '3'=>'Vivienda',
        '4'=>'Vivienda-Condominio',
        '5'=>'Mixto'],
        null,['class'=>'form-control','id'=>'tipo_sel']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Numero de Viviendas'); ?>

        <?php echo Form::text('unidades',null,['class'=>'form-control','placeholder'=>'Unidades habitacionales','required'=>true]); ?>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary btn-block']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>