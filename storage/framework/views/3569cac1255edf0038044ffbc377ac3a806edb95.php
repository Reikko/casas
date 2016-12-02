<?php $__env->startSection('completo'); ?>
    <div class="container-fluid">
        <h2>Registro de Propiedad</h2>
        <?php echo Form::open(['route'=>'una.store','method'=>'POST','class'=>'form-horizontal','files'=> true]); ?>

        <?php echo e(Form::hidden('tipo_prop', $tipoP)); ?>

        <div class="form-group">
            <?php echo Form::label('Codigo Postal',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('codigo',$dir->cp,['class'=>'form-control','disabled']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('zona',$dir->zona,['class'=>'form-control','disabled']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('tipo_prop',"Tipo:".$tipoP,['class'=>'form-control','disabled']); ?>

            </div>

        </div>
        <div class="form-group">
            <?php echo Form::label('DIRECCION',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('estado',$dir->estado,['class'=>'form-control','disabled']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('municipio',$dir->municipio,['class'=>'form-control','disabled']); ?>

            </div>
            <div class="col-sm-3">
                    <select name="id_colonia" class="form-control">
                        <?php foreach($direcciones as $direc): ?>
                            <option value="<?php echo e($direc->id); ?>"><?php echo e($direc->asentamiento); ?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('calle',null,['class'=>'form-control','placeholder'=>'Calle','required' => 'required']); ?>

            </div>
            <div class="col-sm-3">
                <div class="col-sm-6">
                    <?php echo Form::text('num_ext',null,['class'=>'form-control','placeholder'=>'Num Ext','required' => 'required']); ?>

                </div>
                <div class="col-sm-6">
                    <?php echo Form::text('num_int',null,['class'=>'form-control','placeholder'=>'Num Int']); ?>

                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>

    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>