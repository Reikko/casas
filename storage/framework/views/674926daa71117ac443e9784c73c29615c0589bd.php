<?php $__env->startSection('completo'); ?>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <?php echo link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-default btn-block']); ?>

        </div>
    </div><br>

    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">Reportes</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Lugar</th>
                            <th>Tipo</th>
                            <th>Descripcion</th>
                            <th>Observación Cliente</th>
                            <th>Observación trabajador</th>
                            <th>Opcion</th>
                        </thead>

                        <?php foreach($filas as $num => $fila): ?>
                            <tbody>
                            <td><?php echo e($num + 1); ?></td>
                            <td><?php echo e($fila->id_lugar); ?></td>
                            <td><?php echo e($fila->num_defecto); ?></td>
                            <td><?php echo e($fila->completo); ?></td>
                            <td><?php echo e($fila->obs_clie); ?></td>
                            <td><?php echo e($fila->obs_trab); ?></td>
                            <td> Editar </td>
                            </tbody>
                        <?php endforeach; ?>

                        <?php echo Form::open(['route'=>'tabla.store','method'=>'POST']); ?>

                        <?php echo e(Form::hidden('id_reporte', $reporte->id_prop, array('id' => 'invisible_id'))); ?>

                        <td></td>
                        <td>
                            <?php echo Form::select('id_lugar',$lugares,null,['class'=>'form-control']); ?>

                        </td>
                        <td>
                            <?php echo Form::select('tipo',$tipoDef,null,['class'=>'form-control']); ?>

                        </td>
                        <td>
                            <?php echo Form::select('num_defecto',$defecto,null,['class'=>'form-control']); ?>

                        </td>
                        <td>
                            <?php echo Form::textarea('obs_clie',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']); ?>

                        </td>
                        <td>
                            <?php echo Form::textarea('obs_trab',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']); ?>

                        </td>
                        <td>
                            <?php echo Form::submit('Agregar Cuota',['class'=>'btn btn-success btn-block']); ?>

                            <?php echo Form::close(); ?>

                        </td>






                    </table>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>