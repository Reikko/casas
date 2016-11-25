<?php $__env->startSection('363'); ?>
    <?php if($id != 1): ?>
        <h2>Creando Varias</h2>
        <?php for($i=0;$i<$id;$i++): ?>
            <h3><?php echo e($id); ?></h3>
            <?php endfor; ?>

        <?php else: ?>
        <table class="table table-bordered table-hover">

            <thead>
            <th>id</th>
            <th>tipo</th>
            <th>Numero Exterior</th>
            <th>Numero Interior</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
            <td></td>
            <td>
                <?php echo Form::select('tipo', $tipos,1,['class'=>'form-control']); ?>

                <?php echo Form::button('Agregar tipo',[
                    'class'=>'form-control btn btn-default btn-md',
                    'data-toggle'=>'modal',
                    'data-target'=>'#modCalle',
                    'data-backdrop'=>'static' ]); ?>

                    Todos igual <?php echo Form::checkbox('allCalle', 'value',false); ?>

            </td>
            <td>
                <?php echo Form::text('all_Ext',null,['class'=>'form-control']); ?>

                Todos igual
                <?php echo Form::checkbox('allExt', 'value',false); ?>

            </td>
            <td></td>
            <td><button type="button" class="btn btn-info btn-block">
                    <span class="glyphicon glyphicon-lock"></span> Block
                </button>
            </td>
            <td><button type="button" class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-lock"></span> Eliminar
                </button>
            </td>
        <?php echo Form::model($id,['route'=>['unidad.update',$id],'method'=>'PUT']); ?>

        <!--Inicio del formulario-->
            <?php for($i=0;$i<$id;$i++): ?>
                <tbody>
                <td><?php echo e($i+1); ?><?php echo Form::hidden('unidades[]',null,['class'=>'form-control']); ?></td>
                <td><?php echo Form::select('id_calle[]', ['1'=>'Seleccione una Calle'],1,['class'=>'form-control' ]); ?></td>
                <td><?php echo Form::text('num_ext[]','0',['class'=>'form-control']); ?></td>
                <td><?php echo Form::text('num_int[]','0',['class'=>'form-control']); ?></td>
                <td></td>
                </tbody>
            <?php endfor; ?>


        </table>
        <?php echo Form::submit('Actualizar',['class'=>'btn btn-primary']); ?>

        <?php echo Form::close(); ?>

        <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>