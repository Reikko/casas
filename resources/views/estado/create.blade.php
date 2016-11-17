@extends('layouts.app')
@section('444')
    {!! Form::open(['route'=>'edo.store','method'=>'POST']) !!}
        @include('estado.forms.file')
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    @stop