@extends('layouts.app')
@section('444')
    <h1>Tipo {{$tipo->nom_defecto}}</h1>
    {!! Form::open(['route'=>'tipofallo.store','method'=>'POST']) !!}
    {{ Form::hidden('id_t_defecto',$tipo->id) }}
    <div class="form-group">
        {!! Form::label('Descripcion:') !!}
        {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required'=>'true']) !!}
    </div>
    {!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop