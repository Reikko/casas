@extends('layouts.app')

@section('444')
    <h3>Datos del Cliente</h3>
    {!! Form::open(['route'=>'client.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Cliente' ,'required'=>'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Apellido Paterno:') !!}
        {!! Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno','required'=>'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Apellido Materno:') !!}
        {!! Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno', 'required'=>'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Telefono') !!}
        {!! Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Correo:') !!}
        {!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo','required'=>'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Password:') !!}
        {!! Form::password('contra',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
