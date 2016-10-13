@extends('layouts.admin')
@section('content')
    {!! Form::open(['route'=>'des.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Nombre del desarrollo:') !!}
        {!! Form::text('id_des', null,['class'=>'form-control','placeholder'=>'Nombre del desarrollo']) !!}
        <br>
        {!! Form::submit('Guardar desarrollo',['class'=>'btn btn-primary']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Tipos de desarrollo:') !!}
        {!! Form::select('id_edo', [
        '1'=>'Departamentos',
        '2'=>'Unifamiliar',
        '3'=>'Vivienda',
        '4'=>'Vivienda-Condominio',
        '5'=>'Mixto'],
        null,['class'=>'form-control','id'=>'tipo_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Numero de Viviendas') !!}
        {!! Form::text('num_viviendas',null,['class'=>'form-control','placeholder'=>'Unidades habitacionales']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('id_edo', [],null,['class'=>'form-control', 'id'=>'colony_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Ciudad:') !!}
        {!! Form::select('id_col', [],null,['class'=>'form-control', 'id'=>'colony_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Calle/s') !!}
        {!! Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Direccion') !!}
        {!! Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection