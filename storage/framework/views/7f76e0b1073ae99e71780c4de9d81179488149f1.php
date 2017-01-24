<?php $__env->startSection('completo'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nombre cuadrilla</th>
                        <th>Encargado</th>
                        <th>Avance</th>
                    </tr>
                    </thead>
                    <?php
                    $subtotal = 0;
                    ?>
                    <?php foreach($cuadrillas as $fila): ?>

                        <tr>
                            <td><!--Cuadrilla/Nombre-->
                                <?php echo e($fila->nombre); ?></td>
                            <td><!--Encargado-->
                                <?php echo e($fila->nom_trab); ?><?php echo e($fila->ap_pat); ?> <?php echo e($fila->ap_mat); ?></td>
                            <td><!--ver-->
                                <?php echo e(link_to('avanceCuadrilla/'.$fila->id_cuadrilla,'Ver', ['class'=>'btn btn-primary btn-block'])); ?></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>