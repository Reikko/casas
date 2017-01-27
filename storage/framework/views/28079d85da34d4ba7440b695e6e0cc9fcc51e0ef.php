<?php $__env->startSection('completo'); ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>ID Cuadrilla: <?php echo e($cuadrilla->id); ?></h4>
                <h4>Nombre Cuadrilla: <?php echo e($cuadrilla->nombre); ?></h4>
                <h4>Encargado: <?php echo e($cuadrilla->nom_trab); ?><?php echo e($cuadrilla->ap_pat); ?><?php echo e($cuadrilla->ap_mat); ?></h4>
                <div class="row">
                    <div class="col-xs-6"></div>
                    <div class="col-xs-2"><?php echo e(link_to('cuadrilla', 'Regresar',['class'=>'btn btn-default btn-block'])); ?></div>
                    <div class="col-xs-2"><?php echo e(link_to_route('cuadrilla.edit', 'Editar',$cuadrilla->id,['class'=>'btn btn-warning btn-block'])); ?></div>
                    <div class="col-xs-2"><?php echo e(link_to('cuadrilla', 'Eliminar Cuadrilla',['class'=>'btn btn-danger btn-block'])); ?></div>
                </div>

            </div>
            <div class="panel-body">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>Agregados</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trabajador</th>
                                <th>Opcion</th>
                            </tr>
                            </thead>
                            <?php foreach($empleados as $empleado): ?>
                                <tr>
                                    <td><?php echo e($empleado->id_trabajador); ?></td>
                                    <td><?php echo e($empleado->nom_trab); ?><?php echo e($empleado->ap_pat); ?><?php echo e($empleado->ap_mat); ?></td>
                                    <td>
                                        <?php echo Form::open(['route'=>['asignaCuadrilla.destroy',$empleado->id],'method'=>'DELETE']); ?>

                                        <?php echo Form::submit('Quitar',['class'=>'btn btn-danger']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>Faltan por Asignar</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trabajador</th>
                                <th>Opcion</th>
                            </tr>
                            </thead>
                            <?php foreach($trabajadores as $trabajador): ?>
                                <tr>
                                    <td><?php echo e($trabajador->id); ?></td>
                                    <td><?php echo e($trabajador->nom_trab); ?> <?php echo e($trabajador->ap_pat); ?> <?php echo e($trabajador->ap_mat); ?></td>
                                    <td>
                                        <?php echo Form::open(['route'=>'asignaCuadrilla.store','method'=>'POST']); ?>

                                            <?php echo e(Form::hidden('id_cuadrilla', $cuadrilla->id)); ?>

                                            <?php echo e(Form::hidden('id_trabajador', $trabajador->id)); ?>

                                            <?php echo Form::submit('Agregar',['class'=>'btn btn-primary']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>