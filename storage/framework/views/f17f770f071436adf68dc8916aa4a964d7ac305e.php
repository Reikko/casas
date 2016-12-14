<?php $__env->startSection('completo'); ?>
    <div class="container-fluid">
        <h2>Registro de inquilino</h2>
        <?php echo Form::open(['route'=>'inquilino.store','method'=>'POST','class'=>'form-horizontal','files'=> true]); ?>

        <div class="form-group">
            <?php echo Form::label('FOTO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::label('Subir Foto',null,['class'=>'']); ?>

                <?php echo Form::file('foto'); ?>

            </div>
            <?php echo Form::label('TIPO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::select('tipo',['1'=>'Inquilino','2'=>'Dueño'],'1',['class'=>'form-control']); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('NOMBRE COMPLETO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('nom_inquilino',null,['class'=>'form-control','placeholder'=>'Nombre','required' => 'required']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno','required' => 'required']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno','required' => 'required']); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('OCUPACION',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('ocupacion',null,['class'=>'form-control','placeholder'=>'Ocupacion']); ?>

            </div>
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('ESTADO CIVIL',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::select('edo_civil',['Soltero'=>'Soltero','Casado'=>'Casado'],'Soltero',['class'=>'form-control']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::label('SEXO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-9">
                    <?php echo Form::select('sexo',['Masculino'=>'Masculino','Femenino'=>'Femenino'],'Masculino',['class'=>'form-control']); ?>

                </div>
            </div>
            <div class="col-sm-3">
                <?php echo Form::label('ALIAS',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-9">
                    <?php echo Form::text('alias',null,['class'=>'form-control','placeholder'=>'Nombre de usuario']); ?>

                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('FECHA DE NACIMIENTO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <input type="date" name="fecha_nac" class="form-control col-sm-9" required="true">
            </div>
            <?php echo Form::label('ESTADO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">

            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('ESTADO/CIUDAD/MUNICIPIO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::select('lug_nac',['San Luis Potosi'=>'San Luis Potosi','Queretaro'=>'Queretaro'],'San Luis Potosi',['class'=>'form-control']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ciudad','required' => 'required']); ?>

            </div>
            <div class="col-sm-3">
                <?php echo Form::text('municipio',null,['class'=>'form-control','placeholder'=>'Municipio','required' => 'required']); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-3">
                <?php echo Form::text('colonia',null,['class'=>'form-control','placeholder'=>'Colonia/Barrio' ,'required' => 'required']); ?>

            </div>
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
        </div>
        <div class="form-group">
            <?php echo Form::label('IFE',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-6">
                <?php echo Form::label('Adjuntar IFE',null,['class'=>'']); ?>

                <?php echo Form::file('ife'); ?>

            </div>
            <div class="col-sm-3">
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('COMPROBANTE DE DOMICILIO',null,['class'=>'control-label col-sm-3']); ?>

            <div class="col-sm-6">
                <?php echo Form::label('Adjuntar Comprobante de domicilio',null,['class'=>'']); ?>

                <?php echo Form::file('comp_dom'); ?>

            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>