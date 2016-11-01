<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('contentTrab'); ?>
    <table class="table table-bordered table-hover">
        <thead>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Editar</th>
        </thead>
        <td><?php echo Form::select('id_calle', $calles,null,['class'=>'form-control']); ?>

            <a href="#">
                <span class="glyphicon glyphicon-plus"></span>
            </a>Agregar calle</br>
            Todos igual <?php echo Form::checkbox('allCalles', 'value',false); ?></td>
        <td><?php echo Form::text('num_ext',null,['class'=>'form-control']); ?>

            Todos igual <?php echo Form::checkbox('allExt', 'value',false); ?></td>
        <td><?php echo Form::text('num_int',null,['class'=>'form-control']); ?>

            Todos igual <?php echo Form::checkbox('allInt', 'value',false); ?></td>
        <td><button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-lock"></span> Block
            </button>
        </td>

        <?php foreach($unidades as $unidad): ?>
            <tbody>
            <td><?php echo Form::select('id_calle[]', $calles,$unidad->id_calle,['class'=>'form-control','id'=>$unidad->id]); ?></td>
            <td><?php echo Form::text('num_ext[]',$unidad->num_ext,['class'=>'form-control','id'=>$unidad->id]); ?></td>
            <td><?php echo Form::text('num_int[]',$unidad->num_int,['class'=>'form-control','id'=>$unidad->id]); ?></td>
            <td><?php echo e($unidad->editable); ?></td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>