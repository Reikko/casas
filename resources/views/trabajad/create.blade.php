@extends('layouts.admin')

@section('contentTrab')
    <div class="container-fluid">
        <h2>Registro de trabajadores</h2>
        <form class="form-horizontal">
            <div class="form-group">
                {!! Form::label('NOMBRE COMPLETO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('nom_trab',null,['class'=>'form-control','placeholder'=>'Nombre']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('ESTADO CIVIL',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::select('edo_civil',['S'=>'Soltero','C'=>'Casado'],'S',['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('SEXO',null,['class'=>'control-label col-sm-3']) !!}
                    <div class="col-sm-9">
                        {!! Form::select('sexo',['M'=>'Masculino','F'=>'Femenino'],'M',['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('ALIAS',null,['class'=>'control-label col-sm-3']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('alias',null,['class'=>'form-control','placeholder'=>'Nombre de usuario']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('FECHA DE NACIMIENTO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    <input type="date" name="fecha_nac" class="form-control col-sm-9">
                </div>
                {!! Form::label('LUGAR DE NACIMIENTO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::select('lug_nac',['S'=>'San Luis Potosi','Q'=>'Queretaro'],'S',['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('DOMICILIO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('calle',null,['class'=>'form-control','placeholder'=>'Calle']) !!}
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-6">
                        {!! Form::text('num_ext',null,['class'=>'form-control','placeholder'=>'Num Ext']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::text('num_int',null,['class'=>'form-control','placeholder'=>'Num Int']) !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    {!! Form::text('colonia',null,['class'=>'form-control','placeholder'=>'Colonia']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ciudad']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('municipio',null,['class'=>'form-control','placeholder'=>'Municipio']) !!}
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('PUESTO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('puesto',null,['class'=>'form-control','placeholder'=>'Puesto']) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('RENUNCIA',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! link_to('trabajador/create', $title = 'Descargar',['class'=>'form-control btn btn-primary',]) !!}
                </div>
                <div class="col-sm-3">
                    {!!Form::label('Adjuntar renuncia',null,['class'=>'control-label col-sm-6'])!!}
                    {!!Form::file('renuncia')!!}
                </div>

                <div class="col-sm-3">

                </div>
            </div>
            <div class="form-group">
                {!! Form::label('IFE',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! link_to('trabajador/create', $title = 'Adjuntar IFE',['class'=>'form-control btn btn-warning',]) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('CURP',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! link_to('trabajador/create', $title = 'Adjuntar CURP',['class'=>'form-control btn btn-success',]) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('RFC',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'RFC']) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('COMPROBANTE DE DOMICILIO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! link_to('trabajador/create', $title = 'Adjuntar CURP',['class'=>'form-control btn btn-info',]) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('NUMERO DE SEGURO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::select('civil',['L'=>'Lo tengo','N'=>'No lo tengo','P'=>'Pendiente'],'L',['class'=>'form-control']) !!}
                </div>

                <div class="col-sm-3">
                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Numero de Seguro']) !!}
                </div>
                <div class="col-sm-3">
                    {!! link_to('trabajador/create', $title = 'Subir comprobante',['class'=>'form-control btn btn-success',]) !!}
                </div>
            </div>
        </form>
    </div>

    {!! Form::open(['route'=>'client.store','method'=>'POST']) !!}

    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop