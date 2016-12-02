@extends('layouts.app')
@section('completo')
    <div class="container-fluid">
        <h2>Registro de Propiedad</h2>
        {!! Form::open(['action'=>'UnaControl@showDireccion']) !!}
        <div class="form-group">
            {!! Form::label('Codigo Postal',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo Postal','required' => 'required','id'=>'codigo']) !!}
            </div>
            <div class="col-sm-3">

                    {!! Form::select('tipo_prop',['Casa'=>'Casa',
                    'Departamento'=>'Departamento',
                    'Oficina'=>'Oficina',
                    'Bodega'=>'Bodega'],'Casa',['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    {!! Form::submit('Buscar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop