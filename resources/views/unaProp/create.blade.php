@extends('layouts.app')
@section('completo')
    <div class="container-fluid">
        <h2>Registro de Propiedad</h2>
        {!! Form::open(['route'=>'trabajador.store','method'=>'POST','class'=>'form-horizontal','files'=> true]) !!}

        <div class="form-group">
            {!! Form::label('Codigo Postal',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo Postal','required' => 'required','id'=>'codigo']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::button('Buscar',['class'=>'form-control','placeholder'=>'Ciudad','required' => 'required','onClick'=> 'getCodigoPostal()']) !!}
            </div>
            <div class="col-sm-3">

            </div>
        </div>
        <div class="form-group">
            {!! Form::label('DIRECCION',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::select('lug_nac',['San Luis Potosi'=>'San Luis Potosi','Queretaro'=>'Queretaro'],'San Luis Potosi',['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ciudad','required' => 'required']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('municipio',null,['class'=>'form-control','placeholder'=>'Municipio','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('calle',null,['class'=>'form-control','placeholder'=>'Calle','required' => 'required']) !!}
            </div>
            <div class="col-sm-3">
                <div class="col-sm-6">
                    {!! Form::text('num_ext',null,['class'=>'form-control','placeholder'=>'Num Ext','required' => 'required']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::text('num_int',null,['class'=>'form-control','placeholder'=>'Num Int']) !!}
                </div>
            </div>
            <div class="col-sm-3">
                {!! Form::text('colonia',null,['class'=>'form-control','placeholder'=>'Colonia' ,'required' => 'required']) !!}
            </div>
        </div>

    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop