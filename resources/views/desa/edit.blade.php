@extends('layouts.app')
@section('444')

    {!! Form::model($des,['route'=>['des.update',$des->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('id_edo',$estados,$des->id_edo,['class'=>'form-control','id'=>'edo_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Ciudad:') !!}
        {!! Form::select('id_cdad',$ciudades,$des->id_cdad,['class'=>'form-control','id'=>'cdad_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre del desarrollo:') !!}
        {!! Form::text('nom_des', null,['class'=>'form-control','placeholder'=>'Nombre del desarrollo' ,'require' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Tipos de desarrollo:') !!}
        {!! Form::select('tipo', [
        '1'=>'Departamentos',
        '2'=>'Unifamiliar',
        '3'=>'Vivienda',
        '4'=>'Vivienda-Condominio',
        '5'=>'Mixto'],
        $des->tipo,['class'=>'form-control','id'=>'tipo_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Numero de Viviendas') !!}
        {!! Form::text('unidades',null,['class'=>'form-control','placeholder'=>'Unidades habitacionales']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! Form::open(['route'=>['des.destroy',$des->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection