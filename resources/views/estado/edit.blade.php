@extends('layouts.admin')

@section('content')
    {!! Form::model($est,['route'=>['edo.update',$est->id],'method'=>'PUT']) !!}
    @include('estado.forms.file')
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! Form::open(['route'=>['edo.destroy',$est->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}



        @stop