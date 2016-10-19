<?php $__env->startSection('contentTrab'); ?>
    <div class="container-fluid">
        <h2>Registro de trabajadores</h2>
        <form class="form-horizontal">
            <div class="form-group">
                <?php echo Form::label('NOMBRE COMPLETO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Trabajador']); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Apellido Paterno']); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Apellido Materno']); ?>

                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('ESTADO CIVIL',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::select('civil',['S'=>'Soltero','C'=>'Casado'],'S',['class'=>'form-control']); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo Form::label('SEXO',null,['class'=>'control-label col-sm-3']); ?>

                    <div class="col-sm-9">
                        <?php echo Form::select('sexo',['M'=>'Masculino','F'=>'Femenino'],'M',['class'=>'form-control']); ?>

                    </div>
                </div>
                <div class="col-sm-3">
                    <?php echo Form::label('ALIAS',null,['class'=>'control-label col-sm-3']); ?>

                    <div class="col-sm-9">
                        <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de usuario']); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('FECHA DE NACIMIENTO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <input type="date" name="bday" class="form-control col-sm-9">
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('DOMICILIO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Calle']); ?>

                </div>
                <div class="col-sm-3">
                    <div class="col-sm-6">
                        <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Num Ext']); ?>

                    </div>
                    <div class="col-sm-6">
                        <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Num Int']); ?>

                    </div>
                </div>
                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Colonia']); ?>

                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ciudad']); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Municipio']); ?>

                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('PUESTO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Puesto']); ?>

                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('RENUNCIA',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo link_to('trabajador/create', $title = 'Descargar',['class'=>'form-control btn btn-primary',]); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo link_to('trabajador/create', $title = 'Adjuntar',['class'=>'form-control btn btn-success',]); ?>

                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('IFE',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo link_to('trabajador/create', $title = 'Adjuntar IFE',['class'=>'form-control btn btn-warning',]); ?>

                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('CURP',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo link_to('trabajador/create', $title = 'Adjuntar CURP',['class'=>'form-control btn btn-success',]); ?>

                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('RFC',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'RFC']); ?>

                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('COMPROBANTE DE DOMICILIO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo link_to('trabajador/create', $title = 'Adjuntar CURP',['class'=>'form-control btn btn-info',]); ?>

                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('NUMERO DE SEGURO',null,['class'=>'control-label col-sm-3']); ?>

                <div class="col-sm-3">
                    <?php echo Form::select('civil',['L'=>'Lo tengo','N'=>'No lo tengo','P'=>'Pendiente'],'L',['class'=>'form-control']); ?>

                </div>

                <div class="col-sm-3">
                    <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Numero de Seguro']); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo link_to('trabajador/create', $title = 'Subir comprobante',['class'=>'form-control btn btn-success',]); ?>

                </div>
            </div>

        </form>
    </div>

    <?php echo Form::open(['route'=>'client.store','method'=>'POST']); ?>


    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>