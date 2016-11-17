@extends('layouts.app')
@section('444')
    {!! Form::model($est,['route'=>['edo.update',$est->id],'method'=>'PUT']) !!}
    @include('estado.forms.file')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    <br>
    {!! Form::open(['route'=>['edo.destroy',$est->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
    {!! Form::close() !!}
        @stop