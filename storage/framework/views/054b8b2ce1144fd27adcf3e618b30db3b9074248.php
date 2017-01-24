<?php $__env->startSection('completo'); ?>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Avances</h1>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="info">
                            <th>#</th>
                            <th>Lote</th>
                            <th>Cuadrilla/Encargado</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th>Opcion</th>
                        </tr>
                        </thead>
                        <?php foreach($avances as $num => $fila): ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($num + 1); ?></td>
                                    <td><?php echo e($fila->Lnombre); ?></td>
                                    <td><?php echo e($fila->nomCuadrilla); ?> (Encargado: <?php echo e($fila->nom_trab); ?> <?php echo e($fila->ap_pat); ?> <?php echo e($fila->ap_mat); ?> )</td>
                                    <td><?php echo e(\Carbon\Carbon::parse($fila->f_ini)->format(' d-m-Y')); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($fila->f_fin)->format(' d-m-Y')); ?></td>
                                    <td>
                                        <?php echo e(link_to('avance/'.$fila->id,'Ver', ['class'=>'btn btn-primary btn-block'])); ?>

                                        <?php echo e(link_to('ingreso/'.$fila->id,'Editar', ['class'=>'btn btn-primary btn-block'])); ?>

                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>