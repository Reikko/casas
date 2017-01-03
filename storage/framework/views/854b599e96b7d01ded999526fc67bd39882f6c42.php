<?php $__env->startSection('completo'); ?>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <?php echo link_to_route('tabla.show','Ver reporte',$reporte->id, ['class' => 'btn btn-success btn-block']); ?>

        </div>
        <div class="col-sm-3">
            <?php echo link_to_route('tabla.edit','Regresar',$reporte->id, ['class' => 'btn btn-default btn-block']); ?>

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
                        <th>Opción</th>
                    </tr>
                    </thead>
                    <?php foreach($filas as $num => $fila): ?>
                        <tbody>
                            <?php if($fila->id == $id): ?>
                                <tr class="success">
                                    <?php echo Form::model($f,['route'=>['tabla.update',$f->id],'method'=>'PUT']); ?>

                                    <?php echo e(Form::hidden('id_reporte', $f->id_reporte, array('id' => 'invisible_id'))); ?>

                                    <td></td>
                                    <td>
                                        <?php echo Form::select('id_lugar',$lugares,$f->id_lugar,['class'=>'form-control']); ?>

                                    </td>
                                    <td>
                                        <?php echo Form::select('tipo',$tipoDef,$defe->id_t_defecto,['class'=>'form-control','id'=>'tipoDef']); ?>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                Opciones <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Agregar</a></li>
                                                <li><a href="#">Ver</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo Form::select('num_defecto',$defecto,$f->num_defecto,['class'=>'form-control','id'=>'defecto']); ?>

                                    </td>
                                    <td>
                                        <?php echo Form::textarea('obs_clie',$f->obs_clie,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']); ?>

                                    </td>
                                    <td>
                                        <?php echo Form::textarea('obs_trab',$f->obs_trab,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']); ?>

                                    </td>
                                    <td>
                                        <?php echo Form::submit('Guardar',['class'=>'btn btn-success btn-block']); ?>

                                        <?php echo Form::close(); ?>

                                        <?php echo Form::open(['route'=>['tabla.destroy',$f->id],'method'=>'DELETE']); ?>

                                        <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                                <?php else: ?>
                                <tr>
                                    <td><?php echo e($num + 1); ?></td>
                                    <td><?php echo e($fila->nom_lugar); ?></td>
                                    <td><?php echo e($fila->nom_defecto); ?></td>
                                    <td><?php echo e($fila->descripcion); ?></td>
                                    <td><?php echo e($fila->obs_clie); ?></td>
                                    <td><?php echo e($fila->obs_trab); ?></td>
                                    <td>
                                        <?php echo link_to('tabla/'.$reporte->id.'/edit/'.$fila->id,'Editar', ['class' => 'btn btn-default btn-block']); ?>

                                        <?php echo Form::open(['route'=>['tabla.destroy',$fila->id],'method'=>'DELETE']); ?>

                                        <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
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
            <?php echo Form::open(['route'=>['reporte.destroy',$reporte->id],'method'=>'DELETE']); ?>

            <?php echo Form::submit('Eliminar Reporte',['class'=>'btn btn-danger btn-block']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div><br>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>