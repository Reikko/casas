<?php $__env->startSection('completo'); ?>
    <?php if(Session::has('message')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-sm-9">

        </div>
        <div class="col-sm-3">
            <?php echo e(link_to('nuevas/'.$id, $title = 'Regresar',['class'=>' btn btn-success btn-block'])); ?>

        </div>

        <br>
        <br>
        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">Todos los Inquilinos</div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed">
                        <thead>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Agregar</th>
                        </thead>

                        <?php foreach($inq as $t): ?>
                            <tr class="info">
                                <td><?php echo e($t->id); ?></td>
                                <td>
                                    <?php if($t->foto == 'imagen.jpg'): ?>
                                        <?php echo e(Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 70px'])); ?>

                                    <?php else: ?>
                                        <?php echo e(Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 70px'])); ?>

                                    <?php endif; ?>
                                    <br>
                                    <?php echo e(link_to_route('inquilino.show', $title = 'Ver', $t->id,['class'=>'btn btn-primary btn-block'])); ?></td>
                                <td><?php echo e($t->nom_inquilino); ?> <?php echo e($t->ap_pat); ?> <?php echo e($t->ap_mat); ?></td>
                                <td>
                                    <?php if($t->tipo == 1): ?>
                                        Inquilino
                                    <?php else: ?>
                                        Dueño
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo Form::open(['route'=>'relacion.store','method'=>'POST']); ?>

                                    <?php echo e(Form::hidden('id_reg_house', $id)); ?>

                                    <?php echo e(Form::hidden('id_prop', $t->id)); ?>

                                    <?php echo Form::submit('Agregar',['class'=>'btn btn-primary']); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="panel panel-success">
                <div class="panel-heading">Inquilinos Agregados</div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed">
                        <thead>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Eliminar</th>
                        </thead>

                        <?php foreach($ocupantes as $t): ?>
                            <tr class="success">
                                <td><?php echo e($t->id_prop); ?></td>
                                <td>
                                    <?php if($t->foto == 'imagen.jpg'): ?>
                                        <?php echo e(Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 70px'])); ?>

                                    <?php else: ?>
                                        <?php echo e(Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 70px'])); ?>

                                    <?php endif; ?>
                                    <br>
                                    <?php echo e(link_to_route('inquilino.show', $title = 'Ver', $t->id_prop,['class'=>'btn btn-primary btn-block'])); ?></td>
                                <td><?php echo e($t->nom_inquilino); ?> <?php echo e($t->ap_pat); ?> <?php echo e($t->ap_mat); ?></td>
                                <td>
                                    <?php if($t->tipo == 1): ?>
                                        Inquilino
                                    <?php else: ?>
                                        Dueño
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo Form::open(['route'=>['relacion.destroy',$t->id],'method'=>'DELETE']); ?>

                                    <?php echo Form::submit('Quitar',['class'=>'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>