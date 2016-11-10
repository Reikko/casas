<?php $__env->startSection('content'); ?>
    <div class="col-sm-3" >

    </div>

    <div class="row col-sm-6">
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                <?php echo $__env->make('estado.forms.formEdo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <br>
                <button type="button" data-toggle="collapse" class="btn btn-danger btn-block" href="#collapse1"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
            </div>
        </div>
        <h3>CREANDO NUEVA CIUDAD</h3>
        <?php echo Form::open(['route'=>'cdad.store','method'=>'POST']); ?>

        <div class="form-group">

            <?php echo Form::label('Estado:',null,['class'=>'control-label col-sm-12']); ?><br>
            <?php echo Form::select('id_edo', $states,null,['class'=>'form-control col-sm-12' ]); ?>


            <div class="row">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Agregar Estado</a>
                </h4>
            </div>

        </div>
        <div class="form-group">
            <?php echo Form::label('Nombre de la Ciudad',null,['class'=>'control-label']); ?>

            <?php echo Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la ciudad']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
    <div class="col-sm-3">
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>