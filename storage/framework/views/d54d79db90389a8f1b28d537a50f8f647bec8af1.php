<?php $__env->startSection('completo'); ?>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <?php echo link_to('reporte/pdf/'.$reporte->id,'Imprimir reporte', ['class' => 'btn btn-primary btn-block']); ?>

        </div>
        <div class="col-sm-3">
            <?php echo link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-primary btn-block']); ?>

        </div>
        <div class="col-sm-3">
            <?php if($reporte->cerrado == 0): ?>
                <?php echo link_to_route('reporte.edit','Cerrar Reporte',$reporte->id, ['class' => 'btn btn-success btn-block']); ?>

            <?php else: ?>
                <?php echo link_to_route('reporte.edit','Reporte Cerrado',$reporte->id, ['class' => 'btn btn-danger btn-block disabled']); ?>

            <?php endif; ?>
        </div>
    </div><br>

    <div class="row">
        <?php if($reporte->cerrado == 0): ?>
            <div class="panel panel-success">
        <?php else: ?>
            <div class="panel panel-danger">
        <?php endif; ?>

            <div class="panel-heading">
                <h5>Reporte: N° <?php echo e($reporte->id); ?></h5>
                <h5>Fecha: <?php echo e($reporte->fecha_ini); ?></h5>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Observación Cliente</th>
                        <th>Observación trabajador</th>
                        <th>Realizado</th>
                        <th>Opcion</th>
                    </tr>
                    </thead>
                    <?php foreach($filas as $num => $fila): ?>
                        <tbody>
                        <?php if($fila->completo == 1): ?>
                            <tr class="success">
                        <?php else: ?>
                            <tr class="danger">
                        <?php endif; ?>

                            <td><?php echo e($num + 1); ?></td>
                            <td><?php echo e($fila->nom_lugar); ?></td>
                            <td><?php echo e($fila->nom_defecto); ?></td>
                            <td><?php echo e($fila->descripcion); ?></td>
                            <td><?php echo e($fila->obs_clie); ?></td>
                            <td><?php echo e($fila->obs_trab); ?></td>
                            <?php if($fila->f_realizacion != null): ?>
                                <td><?php echo e(\Carbon\Carbon::parse($fila->f_realizacion)->format('d-m-Y')); ?></td>
                            <?php else: ?>
                                <td>No terminado</td>
                            <?php endif; ?>

                            <?php if($fila->completo == 0 &&$reporte->cerrado == 0): ?>
                                    <td><?php echo link_to_action('TablaReporteControl@completarFila','Completar',$fila->id, ['class' => 'btn btn-danger btn-block']); ?></td>
                            <?php else: ?>
                                    <td><?php echo link_to_action('TablaReporteControl@completarFila','Completado',$fila->id, ['class' => 'btn btn-success btn-block disabled']); ?></td>
                            <?php endif; ?>
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <?php if($reporte->cerrado == 0): ?>
                <?php echo link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-success btn-block']); ?>

            <?php endif; ?>
        </div>
    </div><br>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>