@extends('layouts.admin')

@section('content')
    <h3>Datos del Cliente</h3>
    {!! Form::open(['route'=>'client.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Nombre:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Cliente']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Apellido Paterno:') !!}
        {!! Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Apellido Materno:') !!}
        {!! Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Telefono') !!}
        {!! Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Correo:') !!}
        {!! Form::text('correo',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Password:') !!}
        {!! Form::password('contra',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
