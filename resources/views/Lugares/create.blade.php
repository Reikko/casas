@extends('layouts.app')
@section('444')
    {!! Form::open(['route'=>'lugar.store','method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('Lugar:') !!}
            {!! Form::text('nom_lugar',null,['class'=>'form-control','placeholder'=>'Nombre del lugar','required'=>'true']) !!}
        </div>
    {!! Form::submit('Agregar Lugar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    @stop