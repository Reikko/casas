<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('contentTrab'); ?>
    <table class="table table-bordered table-hover">
        <thead>
        <th>id</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Editar</th>
        </thead>
        <td></td>
        <td><?php echo Form::select('id_calle', $calles,null,['class'=>'form-control']); ?>

            <a href="#">
                <span class="glyphicon glyphicon-plus"></span>
            </a>Agregar calle</br>
            Todos igual <?php echo Form::checkbox('allCalles', 'value',false); ?></td>
        <td><?php echo Form::text('all_Calles',null,['class'=>'form-control']); ?>

            Todos igual <?php echo Form::checkbox('allExt', 'value',false); ?></td>
        <td></td>
        <td><button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-lock"></span> Block
            </button>
        </td>
        <?php echo Form::model($unidades,['route'=>['unidad.update',$id],'method'=>'PUT']); ?>

        <?php foreach($unidades as $key => $unidad): ?>
            <tbody>
            <td><?php echo e($key+1); ?><?php echo Form::hidden('unidades[]',$unidad->id,['class'=>'form-control']); ?></td>
            <td><?php echo Form::select('id_calle[]', $calles,$unidad->id_calle,['class'=>'form-control']); ?></td>
            <td><?php echo Form::text('num_ext[]',$unidad->num_ext,['class'=>'form-control']); ?></td>
            <td><?php echo Form::text('num_int[]',$unidad->num_int,['class'=>'form-control']); ?></td>
            <td><?php echo e($unidad->editable); ?></td>
            </tbody>
        <?php endforeach; ?>

    </table>
    <?php echo Form::submit('Actualizar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>