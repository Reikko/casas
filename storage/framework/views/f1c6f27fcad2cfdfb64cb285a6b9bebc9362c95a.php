<?php $__env->startSection('completo'); ?>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <?php echo link_to_route('tabla.show','Ver reporte',$reporte->id, ['class' => 'btn btn-success btn-block']); ?>

        </div>
        <div class="col-sm-3">
            <?php echo link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-default btn-block']); ?>

        </div>
    </div><br>

    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h5>Reporte: N° <?php echo e($reporte->id); ?></h5>
                    <h5>Fecha: <?php echo e($reporte->fecha_ini); ?></h5>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Lugar</th>
                            <th>Tipo</th>
                            <th>Descripcion</th>
                            <th>Observación Cliente</th>
                            <th>Observación trabajador</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <?php foreach($filas as $num => $fila): ?>
                            <tbody>
                            <tr>
                                <td><?php echo e($num + 1); ?></td>
                                <td><?php echo e($fila->nom_lugar); ?></td>
                                <td><?php echo e($fila->nom_defecto); ?></td>
                                <td><?php echo e($fila->descripcion); ?></td>
                                <td><?php echo e($fila->obs_clie); ?></td>
                                <td><?php echo e($fila->obs_trab); ?></td>
                                <td> Editar </td>
                                <td>
                                    <?php echo Form::open(['route'=>['tabla.destroy',$fila->id],'method'=>'DELETE']); ?>

                                    <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            </tbody>
                        <?php endforeach; ?>

                        <?php echo Form::open(['route'=>'tabla.store','method'=>'POST']); ?>

                        <?php echo e(Form::hidden('id_reporte', $reporte->id, array('id' => 'invisible_id'))); ?>

                        <td></td>
                        <td>
                            <?php echo Form::select('id_lugar',$lugares,null,['class'=>'form-control']); ?>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">+</button>
                                <?php echo link_to('lugar','Ver todos', ['class' => 'btn btn-primary']); ?>

                            </div>
                        </td>
                        <td>
                            <?php echo Form::select('tipo',$tipoDef,1,['class'=>'form-control','id'=>'tipoDef']); ?>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">+</button>
                                <?php echo link_to('fallo','Ver todos', ['class' => 'btn btn-primary']); ?>

                            </div>
                        </td>
                        <td width="250">
                            <?php echo Form::select('num_defecto',$defecto,null,['class'=>'form-control','id'=>'defecto']); ?>

                            <?php echo link_to('tipofallo/1','Ver todos', ['class' => 'btn btn-success btn-block ','id'=>'descrip']); ?>

                        </td>
                        <td>
                            <?php echo Form::textarea('obs_clie',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '2','cols'=> '20']); ?>

                        </td>
                        <td>
                            <?php echo Form::textarea('obs_trab',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '2','cols'=> '20']); ?>

                        </td>
                        <td>
                            <?php echo Form::submit('Agregar Fallo',['class'=>'btn btn-success btn-block']); ?>

                            <?php echo Form::close(); ?>

                        </td>
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
                <?php echo Form::open(['route'=>['reporte.destroy',$reporte->id],'method'=>'DELETE']); ?>

                <?php echo Form::submit('Eliminar Reporte',['class'=>'btn btn-danger btn-block']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div><br>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>