<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        En espera de Revision de Datos
    </div>
    <div class="panel panel-default">

        <div class="panel-body">
            <h2><?php echo e($ts->nom_trab); ?> <?php echo e($ts->ap_pat); ?> <?php echo e($ts->ap_mat); ?></h2>
            <h4>Puesto:  <?php echo e($ts->puesto); ?></h4>
            <div class="col-sm-4">
                <?php if($arc->foto == 'imagen.jpg'): ?>
                    <?php echo e(Html::image(asset('imagen.jpg'), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px'])); ?>

                    <?php else: ?>
                    <?php echo e(Html::image(asset('archivos/'.$arc->foto), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px'])); ?>

                <?php endif; ?>
            </div>
            <div class="col-sm-8">
                <h5>Fecha de nacimiento: <?php echo e($ts->fecha_nac); ?></h5>
                <h5>Lugar de nacimiento: <?php echo e($ts->lug_nac); ?></h5>
                <h5>Clave: <?php echo e($ts->id); ?></h5>
                <h5>Estado civil: <?php echo e($ts->edo_civil); ?></h5>
                <h5>Sexo: <?php echo e($ts->sexo); ?></h5>
                <h5>Alias: <?php echo e($ts->alias); ?></h5>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Domicilio</div>
        <div class="panel-body">
            <h5>Calle: <?php echo e($ts->calle); ?></h5>
            <h5>Numero exterior:<?php echo e($ts->num_ext); ?> Numero interior:<?php echo e($ts->num_int); ?></h5>
            <h5><?php echo e($ts->colonia); ?>, <?php echo e($ts->municipio); ?>, <?php echo e($ts->estado); ?>  </h5>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">
            <h5>RFC:<?php echo e($ts->rfc); ?> </h5>

            <h5>Numero de Seguro: <?php echo e($ts->num_seguro); ?>

                <?php echo e(link_to('archivos/'.$arc->com_seguro,'Descargar Comprobante de Seguro',['target'=>'_blank','download'=> ''.$ts->id.'Seguro'])); ?></h5>

            <h5>Renuncia:
                <?php echo e(link_to('archivos/'.$arc->renuncia,'Descargar Renuncia',['target'=>'_blank','download'=> ''.$ts->id.'Renuncia'])); ?></h5>
            <h5>IFE:
                <?php echo e(link_to('archivos/'.$arc->ife,'Descargar IFE',['target'=>'_blank','download'=> ''.$ts->id.'IFE'])); ?></h5>

            <h5>Comprobante de Domicilio:
                <?php echo e(link_to('archivos/'.$arc->comp_dom,'Descargar Comprobante de Domicilio',['target'=>'_blank','download'=> ''.$ts->id.'DOMICILIO'])); ?></h5>

            <h5>Curp:
                <?php echo e(link_to('archivos/'.$arc->curp,'Descargar CURP',['target'=>'_blank','download'=> ''.$ts->id.'CURP'])); ?></h5>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>