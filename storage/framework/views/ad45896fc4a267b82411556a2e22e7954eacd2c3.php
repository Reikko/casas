

<?php if($cuota->tipo_cuota == 1): ?>                            <!--La Cuota Fue Diaria-->
    <h1>Fecha de inicio <?php echo e($cuota->fecha_ini); ?></h1>

    <h1>Se añadio una cuota de <?php echo e($tipo->nom_cuota); ?> por concepto de $<?php echo e($cuota->monto); ?></h1>
    <h1>Pagala antes del <?php echo e($cuota->created_at->format('d-m-Y')); ?></h1>

    <h3>Descripción: <?php echo e($cuota->descripcion); ?></h3>
    <?php endif; ?>
