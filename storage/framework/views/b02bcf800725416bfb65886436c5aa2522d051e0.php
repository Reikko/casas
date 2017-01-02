<?php $__env->startSection('363'); ?>
    <?php if(Session::has('message')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>

    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
        <?php echo link_to('des','Regresar',['class'=>'btn btn-primary btn-block']); ?>

    </div>
    <div class="col-sm-3">
        <?php echo link_to_route('unidad.edit','Editar',$id,['class'=>'btn btn-primary btn-block']); ?>

    </div>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Editable</th>
        <th>Ver</th>
        <th>Eliminar</th>
        </thead>

        <?php foreach($propiedades as $key =>$propiedad): ?>

            <tbody>
            <td><?php echo e($key+1); ?></td>
            <td><?php echo e($propiedad->nom_calle); ?></td>
            <td><?php echo e($propiedad->num_ext); ?></td>
            <td><?php echo e($propiedad->num_int); ?></td>
            <td><?php echo e($propiedad->editable); ?></td>
            <td><?php echo link_to_route('unidad.show', $title = 'Ver Unidad',$propiedad->id,['class'=>'btn btn-info btn-block']); ?></td>
            <td>
                <?php echo Form::open(['route'=>['unidad.destroy',$propiedad->id],'method'=>'DELETE']); ?>

                <?php echo Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']); ?>

                <?php echo Form::close(); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>