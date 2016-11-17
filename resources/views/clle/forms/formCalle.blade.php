{!! Form::open(['url' => 'calle/create/'.$id]) !!}
<div class="form-group">

    {!! Form::label('Nombre de la Calle') !!}
    {!! Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']) !!}
</div>
{!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}