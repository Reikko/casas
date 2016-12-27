<?php $__env->startSection('completo'); ?>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <?php echo link_to_route('nuevas.show','Regresar',$id, ['class' => 'btn btn-default btn-block']); ?>

        </div>
    </div><br>

    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-success">
                <div class="panel-heading">Reportes</div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha Reporte</th>
                            <th>Fecha fin</th>
                            <th>Ver</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Cerrar</th>
                        </tr>
                        </thead>
                    <?php foreach($reportes as $num => $reporte): ?>
                        <tbody>
                        <?php if($reporte->cerrado == 0): ?>
                            <tr class="success">
                        <?php else: ?>
                            <tr class="danger">
                        <?php endif; ?>
                                <td><?php echo e($num + 1); ?></td>
                                <td><?php echo e($reporte->fecha_ini); ?></td>
                                <td><?php echo e($reporte->fecha_fin); ?></td>
                                <?php if($reporte->cerrado == 0): ?>
                                    <td><?php echo link_to_route('tabla.show','Ver',$reporte->id, ['class' => 'btn btn-success btn-block']); ?></td>
                                    <td>Abierto</td>
                                    <td><?php echo link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-success btn-block']); ?></td>
                                    <td><?php echo link_to_route('reporte.edit','Cerrar',$reporte->id, ['class' => 'btn btn-success btn-block']); ?></td>
                                <?php else: ?>
                                    <td><?php echo link_to_route('tabla.show','Ver',$reporte->id, ['class' => 'btn btn-danger btn-block']); ?></td>
                                    <td>Cerrado</td>
                                    <td><?php echo link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-danger btn-block disabled']); ?></td>
                                    <td><?php echo link_to_route('reporte.edit','Cerrar',$reporte->id, ['class' => 'btn btn-danger btn-block disabled']); ?></td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">Nuevo Reporte</div>
                <div class="panel-body">
                    <?php echo Form::open(['route'=>'reporte.store','method'=>'POST']); ?>

                    <?php echo e(Form::hidden('id_prop', $id)); ?>

                    <?php echo e(Form::hidden('tipo_rol', Auth::user()->rol)); ?>

                    <?php foreach($inquilinos as $inq): ?>
                        <?php echo e(Form::radio('inqui', $inq->id_prop)); ?> <?php echo e($inq->nom_inquilino); ?> <?php echo e($inq->ap_pat); ?>  <br>
                    <?php endforeach; ?>
                    <?php echo e(Form::radio('inqui',Auth::user()->id, true)); ?> <?php echo e(Auth::user()->name); ?><br>
                    <?php echo Form::submit('Nuevo Reporte',['class'=>'btn btn-primary']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">Reportes</div>
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
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>