<?php $__env->startSection('completo'); ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1><?php echo e($lote->nombre); ?>

                    <?php echo e(link_to('avance/'.$id,'Ver', ['class'=>'btn btn-primary'])); ?>

                </h1>
                <h5>Destajista: <?php echo e($empleado->nombre); ?></h5>
                <h5>Folio N° : <?php echo e($avance->id); ?></h5>
                <h5>Fecha inicial: <?php echo e(\Carbon\Carbon::parse($avance->f_ini)->format(' d-m-Y')); ?></h5>
                <h5>Fecha final: <?php echo e(\Carbon\Carbon::parse($avance->f_fin)->format(' d-m-Y')); ?></h5>
            </div>
            <div class="panel-body">

                <div class="col-sm-3"></div>
                <div class="col-sm-6"><?php echo e($destajos->render()); ?></div>
                <div class="col-sm-3">
                </div>
                <table class="table table-condensed table-bordered table-hover ">
                    <thead>
                    <tr>
                        <th>DESCRIPCION</th>
                        <th>%AVANCE ANTERIOR</th>
                        <th>%ESTE AVANCE</th>
                        <th>$PAGO POR AVANCE</th>
                        <th>% MODIFICAR AVANCE</th>
                        <th>%AVANCE TOTAL</th>
                    </tr>
                    </thead>
                    <?php echo Form::open(['url'=>'ingreso/valor','method'=>'POST','id'=>'form_enviar']); ?>

                    <?php echo e(Form::hidden('lote',$lote->id)); ?>

                    <?php echo e(Form::hidden('id_avance',$id)); ?>


                    <?php foreach($destajos as $i=> $destajo): ?>
                        <tr data-id="<?php echo e($destajo->id); ?>">
                            <?php if($errors->has('porcentaje.'.$i)): ?>
                                <?php echo Form::hidden('id_destajo['.$i.']', old('id_destajo.'.$i)); ?>

                            <?php else: ?>
                                <?php echo Form::hidden('id_destajo['.$i.']', $destajo->id); ?>

                            <?php endif; ?>
                            <td>
                                <?php echo e($destajo->descripcion); ?>

                            </td>
                            <?php $ya = 1; ?>
                            <?php foreach($av_ant as $fila): ?>
                                <?php if($fila->id_destajo == $destajo->id): ?>
                                    <td class="warning">
                                        <?php echo e($fila->avance); ?> %
                                        <?php $ya = 0; ?>
                                    </td>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if($ya == 1): ?>
                                <td>0 %</td>
                            <?php endif; ?>

                            <?php $ya = 1; ?>
                            <?php foreach($filasLote as $fl): ?>
                                <?php if($fl->id_destajo == $destajo->id && $fl->avance>0): ?>
                                    <td class="info">
                                        <?php echo e($fl->avance); ?> %
                                    </td>
                                    <?php $ya = 0; ?> <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if($ya == 1): ?>
                                <td>0 %</td>
                            <?php endif; ?>

                            <?php if($errors->has('pago.'.$i)): ?>
                                <td>
                                    <?php echo e(old('pago.'.$i)); ?>

                                </td>
                            <?php else: ?>
                                <?php $ya = 1; ?>
                                <?php foreach($filasLote as $fl): ?>
                                    <?php if($fl->id_destajo == $destajo->id): ?>
                                        <td >
                                            <div id="<?php echo e("pago".$destajo->id); ?>">
                                                <?php echo e(($fl->avance/100)*(($destajo->destajo/100)*$destajo->total)); ?>

                                            </div>
                                        </td>
                                        <?php $ya = 0; ?> <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php if($ya == 1): ?>
                                    <td>
                                        <div id="<?php echo e("pago".$destajo->id); ?>">
                                            0
                                        </div>
                                    </td>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if($errors->has('porcentaje.'.$i)): ?>
                                <td>
                                    <div class="form-group<?php echo e('porcentaje.'.$i ? ' has-error' : ''); ?>">
                                        <?php echo e(Form::text('porcentaje['.$i.']',old('porcentaje.'.$i),['class'=>'form-control'])); ?>

                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('porcentaje.'.$i)); ?></strong>
                                    </span>
                                    </div>
                                </td>
                            <?php else: ?>
                                <?php $ya = 1; ?>
                                <?php foreach($filasLote as $fl): ?>
                                    <?php if($fl->id_destajo == $destajo->id): ?>
                                        <td>
                                            <?php echo e(Form::text('porcentaje['.$i.']', $fl->avance ,['class'=>'form-control'])); ?>

                                            <strong id="<?php echo e("error".$i); ?>"></strong>
                                        </td>
                                        <?php $ya = 0; ?> <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php if($ya == 1): ?>
                                    <td>
                                        <?php echo e(Form::text('porcentaje['.$i.']', 0 ,['class'=>'form-control'])); ?>

                                        <strong id="<?php echo e("error".$i); ?>"></strong>
                                    </td>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php foreach($av_total as $avt): ?>
                                <?php if($avt->id_destajo == $destajo->id): ?>
                                    <td class="success">
                                        <?php echo e($avt->avance); ?> %
                                        <?php $ya = 0; ?>
                                    </td>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if($ya == 1): ?>
                                <td >0 %</td>
                            <?php endif; ?>

                        </tr>

                    <?php endforeach; ?>
                    <?php echo Form::close(); ?>

                </table>


            </div>
        </div>
    </div>

    <?php echo Html::script('/js/calculaPago.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>