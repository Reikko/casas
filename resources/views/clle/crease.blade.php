@extends('layouts.app')
@section('444')
    {!! link_to_route('calle.show','Regresar',$id, ['class' => 'btn btn-primary']) !!}
    <br>
    <br>
    {!! Form::open(['url' => 'calle/create/'.$id]) !!}
        <div class="form-group">

            {!! Form::label('Nombre de la Calle') !!}
            {!! Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']) !!}
        </div>
    {!! Form::submit('Agregar',['class'=>'btn btn-success btn-block']) !!}
    {!! Form::close() !!}
@endsection