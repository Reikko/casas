<?php echo Form::open(['url' => 'calle/create/'.$id]); ?>

<div class="form-group">

    <?php echo Form::label('Nombre de la Calle'); ?>

    <?php echo Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']); ?>

</div>
<?php echo Form::submit('Agregar',['class'=>'btn btn-primary']); ?>

<?php echo Form::close(); ?>