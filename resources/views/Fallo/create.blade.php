@extends('layouts.app')
@section('444')
    {!! Form::open(['route'=>'fallo.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Lugar:') !!}
        {!! Form::text('nom_defecto',null,['class'=>'form-control','placeholder'=>'Nombre del lugar de defecto','required'=>'true']) !!}
    </div>
    {!! Form::submit('Agregar Lugar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop