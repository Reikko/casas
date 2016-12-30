<?php $__env->startSection('completo'); ?>
    <?php if(Session::has('message')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>
    <div class="panel panel-primary">
        <div class="panel-heading"><h2><?php echo e($inq->nom_inquilino); ?> <?php echo e($inq->ap_pat); ?> <?php echo e($inq->ap_mat); ?></h2></div>
        <div class="panel-body">

            <div class="col-sm-4">
                <h4>Ocupacion:  <?php echo e($inq->ocupacion); ?></h4>
                <?php if($inq->foto == 'imagen.jpg'): ?>
                    <?php echo e(Html::image(asset('imagen.jpg'), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px'])); ?>

                    <?php else: ?>
                        <?php echo e(Html::image(asset('archivos/'.$inq->foto), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px'])); ?>

                <?php endif; ?>
                <?php echo link_to_route('inquilino.edit','Editar', $inq->id, ['class'=>'btn btn-primary btn-block']); ?>

            </div>
            <div class="col-sm-8">
                <h5>Fecha de nacimiento: <?php echo e($inq->fecha_nac); ?></h5>
                <h5>Lugar de nacimiento: <?php echo e($inq->lug_nac); ?></h5>
                <h5>Clave: <?php echo e($inq->id); ?></h5>
                <h5>Estado civil: <?php echo e($inq->edo_civil); ?></h5>
                <h5>Sexo: <?php echo e($inq->sexo); ?></h5>
                <h5>Alias: <?php echo e($inq->alias); ?></h5>
            </div>

        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Domicilio</div>
        <div class="panel-body">
            <h5>Calle: <?php echo e($inq->calle); ?></h5>
            <h5>Numero exterior:<?php echo e($inq->num_ext); ?></h5>
            <h5>Numero interior:<?php echo e($inq->num_int); ?></h5>
            <h5><?php echo e($inq->colonia); ?>, <?php echo e($inq->municipio); ?>, <?php echo e($inq->estado); ?>  </h5>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">

            <?php if($inq->ife != null): ?>
                <h5>IFE:
                    <?php echo e(link_to('archivos/'.$inq->ife,'Descargar IFE',['target'=>'_blank','download'=> ''.$inq->id.'IFE_INQ'])); ?></h5>
                <?php else: ?>
                    <h5>IFE: Sin Archivo</h5>
            <?php endif; ?>

            <?php if($inq->comp_dom != null): ?>
            <h5>Comprobante de Domicilio:
                <?php echo e(link_to('archivos/'.$inq->comp_dom,'Descargar Comprobante de Domicilio',['target'=>'_blank','download'=> ''.$inq->id.'DOMICILIO_INQ'])); ?></h5>
                <?php else: ?>
                <h5>Comprobante de Domicilio:
                    Sin Comprobante</h5>
            <?php endif; ?>

            <?php if($inq->contrato != null): ?>
                <h5>Contrato:
                    <?php echo e(link_to('archivos/'.$inq->contrato,'Descargar Contrato',['target'=>'_blank','download'=> ''.$inq->id.'CONTRATO_INQ'])); ?></h5>
            <?php else: ?>
                <h5>Contrato
                    Sin Contrato</h5>
            <?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>