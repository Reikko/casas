<?php echo Form::open(['route'=>'cdad.store','method'=>'POST']); ?>

<div class="form-group">
    <?php echo Form::select('id_edo',$estados,null,['class'=>'form-control']); ?>

    <?php echo Form::label('Nombre de la Ciudad',null,['class'=>'control-label']); ?>

    <?php echo Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la ciudad']); ?>

</div>
<div class="form-group">
    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>

</div>
<?php echo Form::close(); ?>