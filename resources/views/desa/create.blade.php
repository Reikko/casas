@extends('layouts.app')
@section('444')
    @include('modal.cdad')
    <h3>Creando Desarrollo</h3>
    {!! Form::open(['route'=>'des.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('id_ed',$estados,null,['class'=>'form-control','id'=>'edo_sel','required'=>true]) !!}
        {!! Form::button('Agregar Estado',[
            'class'=>'form-control btn btn-info btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modEstado',
            'data-backdrop'=>'static' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Ciudad:') !!}
        {!! Form::select('id_cdad',$ciudades,null,['class'=>'form-control','id'=>'cdad_sel']) !!}
        {!! Form::button('Agregar Ciudad',[
            'class'=>'form-control btn btn-info btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modCiudad',
            'data-backdrop'=>'static' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre del desarrollo:') !!}
        {!! Form::text('nom_des', null,['class'=>'form-control','placeholder'=>'Nombre del desarrollo' ,'required'=>true ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Tipos de desarrollo:') !!}
        {!! Form::select('tipo', [
        '1'=>'Departamentos',
        '2'=>'Unifamiliar',
        '3'=>'Vivienda',
        '4'=>'Vivienda-Condominio',
        '5'=>'Mixto'],
        null,['class'=>'form-control','id'=>'tipo_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Numero de Viviendas') !!}
        {!! Form::text('unidades',null,['class'=>'form-control','placeholder'=>'Unidades habitacionales','required'=>true]) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
@endsection