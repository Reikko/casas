<?php $__env->startSection('completo'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Avance :<?php echo e($datosCuadrilla->nombre); ?></h4>
            </div>
            <div class="panel-body">
        <?php foreach($cuadrillas as $cuadrilla): ?>
                <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><?php echo e($cuadrilla->nombre); ?></h4>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CONCEPTO</th>
                        <th>PROCESO</th>
                        <th>AVANCE</th>
                        <th>PRECIO TOTAL</th>
                        <th>PRECIO POR AVANCE</th>
                    </tr>
                    </thead>
                    <?php
                    $subtotal = 0;
                    ?>
                    <?php foreach($filas as $fila): ?>
                        <?php if($cuadrilla->id == $fila->id_avance): ?>
                            <?php if($fila->porcentaje == 100): ?>
                                <tr class="success">
                            <?php else: ?>
                                <tr>
                                    <?php endif; ?>
                                    <td>
                                        <?php echo e($fila->id_destajo); ?>

                                    </td>
                                    <td>
                                        <?php echo e($fila->concepto); ?>

                                    </td>
                                    <td>
                                        <?php echo e($fila->descripcion); ?>

                                    </td>
                                    <td>
                                        <?php echo e($fila->porcentaje); ?> %
                                    </td>
                                    <td>
                                        $<?php echo e(($fila->destajo/100)*$fila->total); ?>

                                    </td>
                                    <td>
                                        $<?php echo e((($fila->destajo/100)*$fila->total)*($fila->porcentaje/100)); ?>

                                        <?php
                                        $subtotal += (($fila->destajo/100)*$fila->total)*($fila->porcentaje/100);
                                        ?>
                                    </td>
                                </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>


                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total acumulado</th>
                            <th>$<?php echo e($subtotal); ?></th>
                </table>
            </div>
        </div>
                    </div>
        <?php endforeach; ?>
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>