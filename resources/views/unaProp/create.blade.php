@extends('layouts.app')
@section('completo')
    <div class="container-fluid">
        <h2>Registro de Propiedad</h2>
        {!! Form::open(['route'=>'una.store','method'=>'POST','class'=>'form-horizontal','files'=> true]) !!}
        {{ Form::hidden('tipo_prop', $tipoP) }}
        <div class="form-group">
            {!! Form::label('Codigo Postal',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('codigo',$dir->cp,['class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('zona',$dir->zona,['class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('tipo_prop',"Tipo:".$tipoP,['class'=>'form-control','disabled']) !!}
            </div>

        </div>
        <div class="form-group">
            {!! Form::label('DIRECCION',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('estado',$dir->estado,['class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('municipio',$dir->municipio,['class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-sm-3">
                    <select name="id_colonia" class="form-control">
                        @foreach($direcciones as $direc)
                            <option value="{{$direc->id}}">{{$direc->asentamiento}}</option>
                        @endforeach
                    </select>
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
            </div>
        </div>

    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop