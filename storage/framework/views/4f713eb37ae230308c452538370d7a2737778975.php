<?php $__env->startSection('completo'); ?>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    <?php echo e($lote->nombre); ?>

                    <?php echo e(link_to('avance/','Regresar a avances', ['class'=>'btn btn-primary'])); ?>

                    <?php echo e(link_to('ingreso/'.$id,'Editar', ['class'=>'btn btn-primary'])); ?>

                </h1>
                <h4>Destajista: <?php echo e($avance[0]->nom_trab); ?> <?php echo e($avance[0]->ap_pat); ?></h4>
                <h5>Folio/Avance N° : <?php echo e($avance[0]->id); ?></h5>
                <h5>Fecha inicial: <?php echo e(\Carbon\Carbon::parse($avance[0]->f_ini)->format(' d-m-Y')); ?></h5>
                <h5>Fecha final: <?php echo e(\Carbon\Carbon::parse($avance[0]->f_fin)->format(' d-m-Y')); ?></h5>


            </div>
            <div class="panel-body">
                <?php echo Form::open(['route'=>'ingreso.store','method'=>'POST']); ?>

                <?php echo e(Form::hidden('id_avance',$id)); ?>

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
                                <?php echo e($fila->avance); ?> %
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

                    <?php endforeach; ?>

                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total acumulado</th>
                    <th>$<?php echo e($subtotal); ?></th>
                </table>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>