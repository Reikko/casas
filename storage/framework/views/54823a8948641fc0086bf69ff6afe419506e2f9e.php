<?php $__env->startSection('completo'); ?>
    <?php echo $__env->make('modal.calle', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(Session::has('message')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-bordered table-hover">

        <thead>
        <th>id</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </thead>
        <td></td>
        <td><?php echo Form::select('id_calle', $calles,1,['class'=>'form-control','id'=>'calle']); ?>

            <?php echo Form::button('Agregar Calle',[
            'class'=>'form-control btn btn-default btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modCalle',
            'data-backdrop'=>'static' ]); ?>

            Todos igual <?php echo Form::checkbox('allCalle', 'value',false,['onclick'=> 'seleccionarCalle()','id'=>'allCalle']); ?></td>
        <td><?php echo Form::text('all_Ext',null,['class'=>'form-control','id'=>'a_ext']); ?>

            Todos igual <?php echo Form::checkbox('allExt', 'value',false,['onclick'=> 'seleccionNumExt()','id'=>'n_ext']); ?></td>
        <td></td>
        <td><button type="button" class="btn btn-info btn-block">
                <span class="glyphicon glyphicon-lock"></span> Block
            </button>
        </td>
        <td><button type="button" class="btn btn-danger btn-block">
                <span class="glyphicon glyphicon-lock"></span> Eliminar
            </button>
        </td>
    <?php echo Form::model($unidades,['route'=>['unidad.update',$id],'method'=>'PUT','id'=>'formSelect']); ?>

        <!--Inicio del formulario-->
        <?php foreach($unidades as $key => $unidad): ?>
            <tr>
            <td><?php echo e($key+1); ?><?php echo Form::hidden('unidades[]',$unidad->id,['class'=>'form-control']); ?></td>
            <td><?php echo Form::select('id_calle[]', $calles,$unidad->id_calle,['class'=>'form-control' ]); ?></td>
            <td><?php echo Form::text('num_ext[]',$unidad->num_ext,['class'=>'form-control']); ?></td>
            <td><?php echo Form::text('num_int[]',$unidad->num_int,['class'=>'form-control']); ?></td>
            <td><?php echo e($unidad->editable); ?></td>

            </tr>
        <?php endforeach; ?>

    </table>
    <?php echo Form::submit('Actualizar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>