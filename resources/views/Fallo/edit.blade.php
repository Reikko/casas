@extends('layouts.app')
@section('444')
    {!! Form::model($lugar,['route'=>['fallo.update',$lugar->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('Lugar:') !!}
        {!! Form::text('nom_defecto',null,['class'=>'form-control','placeholder'=>'Nombre del lugar','required'=>'true']) !!}
    </div>
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    <br>
    {!! Form::open(['route'=>['fallo.destroy',$lugar->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
    {!! Form::close() !!}
@endsection