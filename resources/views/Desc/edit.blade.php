@extends('layouts.app')
@section('444')
    <h1>Tipo {{$tipo->nom_defecto}}</h1>
    {!! Form::model($def,['route'=>['tipofallo.update',$def->id],'method'=>'PUT']) !!}
    {{ Form::hidden('id_t_defecto',$tipo->id) }}
        <div class="form-group">
            {!! Form::label('Descripcion:') !!}
            {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required'=>'true']) !!}
        </div>
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop