<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Estatus</th>
        <th>Apodo</th>
        <th>Archivos</th>
        <th>Editar</th>
        <th>Baja</th>
        </thead>

        <?php foreach($ts as $t): ?>
            <tbody>
            <?php if($t->estatus ==1): ?>
                <tr class="success">
            <?php endif; ?>

            <?php if($t->estatus == 2): ?>
                <tr class="info">
            <?php endif; ?>

            <?php if($t->estatus == 3): ?>
                <tr class="danger">
                    <?php endif; ?>
            <td><?php echo e($t->id); ?></td>
            <!--<?php if($t->foto == ""): ?>
                        <td><img src="archivos/imagen.png" style="width: 100px"></td>
                <?php else: ?>
                    <td><img src="archivos/<?php echo e($t->foto); ?>" style="width: 100px"></td>
                    <?php endif; ?>
                        -->
                    <td><img src="archivos/imagen.jpg" style="width: 100px"></td>
            <td><?php echo e($t->nom_trab); ?> <?php echo e($t->ap_pat); ?> <?php echo e($t->ap_mat); ?></td>
            <td><?php echo e($t->puesto); ?></td>
            <td><?php echo e($t->estatus); ?></td>
            <td><?php echo e($t->alias); ?></td>
            <td><a href="archivos/<?php echo e($t->renuncia); ?>" target="_blank"> Renuncia</a>
                <a href="archivos/<?php echo e($t->ife); ?>" target="_blank"> IFE</a><br>
                <a href="archivos/<?php echo e($t->curp); ?>" target="_blank"> CURP</a>
                <a href="archivos/<?php echo e($t->comp_dom); ?>" target="_blank"> DOMICILIO</a>
                <a href="archivos/<?php echo e($t->com_seguro); ?>" target="_blank"> SEGURO</a>
            </td>
            <td>Editar</td>
                    <td>Baja</td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>