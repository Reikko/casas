<?php $__env->startSection('completo'); ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">Documentos</div>
                <div class="panel-body">
                    <h5>Escrituras: </h5>
                    <?php echo link_to_route('nuevas.edit','Agregar Inquilino',$ts->id,['class'=>'btn btn-success btn-block']); ?>

                    <?php echo link_to_route('nuevas.edit','Agregar Dueño',$ts->id,['class'=>'btn btn-success btn-block']); ?>

                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">Ubicación</div>
                <div class="panel-body">
                        <h5>Estado: <?php echo e($dir->estado); ?></h5>
                        <h5>Municipio: <?php echo e($dir->municipio); ?></h5>
                        <h5><?php echo e($dir->tipo); ?>: <?php echo e($dir->asentamiento); ?></h5>
                        <h5>Tipo de zona: <?php echo e($dir->zona); ?></h5>
                        <h5>Tipo de Propiedad: <?php echo e($ts->tipo_prop); ?></h5>
                        <h5>Calle : <?php echo e($ts->calle); ?></h5>
                        <h5>Código Postal: <?php echo e($dir->cp); ?></h5>
                        <h5>Numero Exterior: <?php echo e($ts->num_ext); ?></h5>
                        <h5>Numero Interior: <?php echo e($ts->num_int); ?></h5>
                        <?php echo link_to_route('nuevas.edit','Editar',$ts->id,['class'=>'btn btn-success btn-block']); ?>

                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">Servicios</div>
                <div class="panel-body">
                    <table>
                        <thead>
                        <th>Servicio</th>
                        <th>Monto</th>
                        </thead>
                    <?php foreach($cuotas as $cuota): ?>
                            <tbody>
                                <td><?php echo e($cuota->tipo_cuota); ?></td>
                                <td><?php echo e($cuota->monto); ?></td>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                    <?php echo link_to('cuota/create/'.$ts->id,'Agrega',['class'=>'btn btn-success btn-block glyphicon glyphicon-wrench']); ?>

                </div>
            </div>
        </div>
    </div>

        <div class="panel panel-info">
            <div class="panel-heading">Administrar Propiedad</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <button type="button" class="form-control btn btn-info">
                                Inquilinos
                                <span class="glyphicon glyphicon-user"></span>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="form-control btn btn-info">
                                Contabilidad
                                <span class="glyphicon glyphicon-th-list"></span>
                            </button>
                        <td>
                            <button type="button" class="form-control btn btn-info">
                                Recordatorios
                                <span class="glyphicon glyphicon-time"></span>
                            </button>
                        <td>
                            <button type="button" class="form-control btn btn-info">
                                Reportes
                                <span class="glyphicon glyphicon-wrench"></span>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>