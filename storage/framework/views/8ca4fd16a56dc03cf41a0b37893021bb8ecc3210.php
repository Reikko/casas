<?php $__env->startSection('completo'); ?>
    <?php if($errors->has()): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php foreach($errors->all() as $error): ?>
                <div><?php echo e($error); ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php echo $__env->make('modal.servicio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <table class="table table-bordered">
        <thead>
            <th>Fecha de inicio <br>DD/MM/AAAA</th>
            <th>Tipo de Servicio</th>
            <th>Periodo</th>
            <th>Monto</th>
            <th>Descripción</th>
            <th>Pueden ver</th>
            <th>Opción</th>
        </thead>
        <?php foreach($regCuotas as $c): ?>
            <?php if($c->id == $id): ?>
                <tr class="success">
                <?php echo Form::model($cuota,['route'=>['cuota.update',$cuota->id],'method'=>'PUT']); ?>

                <?php echo e(Form::hidden('id_prop', $cuota->id_prop, array('id' => 'invisible_id'))); ?>

                <td>
                    <input type="date" name="fecha_ini" class="form-control col-sm-9" required ="true" value=<?php echo e($cuota->fecha_ini); ?>>
                </td>
                <td> <?php echo Form::select('tipo_cuota',$cuotas,null,['class'=>'form-control']); ?>

                    <?php echo Form::button('Agregar Servicio',[
                        'class'=>'form-control btn btn-info btn-md',
                        'data-toggle'=>'modal',
                        'data-target'=>'#modServicio',
                        'data-backdrop'=>'static' ]); ?>

                </td>
                <td>
                    <?php echo Form::select('tipo_periodo',$periodos,null,['class'=>'form-control']); ?>

                </td>
                <td>
                    <?php echo Form::text('monto',null,['class'=>'form-control','placeholder'=>'Monto/Cantidad' ,'required'=>'true']); ?>

                </td>
                <td rowspan="2">
                    <?php echo Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']); ?>

                </td>
                <td>
                    <?php echo Form::radio('ver', '1'); ?> Dueño <br>
                    <?php echo Form::radio('ver', '2'); ?> Inquilino<br>
                    <?php echo Form::radio('ver', '3', ['class' => 'field']); ?> Todos
                </td>
                <td><?php echo Form::submit('Guardar',['class'=>'btn btn-success btn-block']); ?>

                    <?php echo Form::close(); ?>

                </td>
                </tr>
            <?php else: ?>
                <tbody>
                <tr>
                    <td><?php echo e(Carbon\Carbon::parse($c->fecha_ini)->format('d-m-Y')); ?></td>
                    <td><?php echo e($c->nom_cuota); ?></td>
                    <td><?php echo e($c->nom_periodo); ?></td>
                    <td>
                        $<?php echo e($c->monto); ?>

                    </td>
                    <td>
                        <?php echo e($c->descripcion); ?>

                    </td>
                    <td>
                        <?php echo e($c->ver); ?>

                    </td>
                    <td>
                        <?php echo link_to_route('cuota.show', $title = 'Modificar', $parameters = $c->id, $attributes = ['class'=>'btn btn-info btn-block']); ?>

                        <?php echo Form::open(['route'=>['cuota.destroy',$c->id],'method'=>'DELETE']); ?>

                        <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
                </tbody>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>