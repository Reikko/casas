@extends('layouts.app')
@section('completo')
    <div class="container-fluid">
        <h2>Editar datos</h2>
        {!! Form::model($ts,['route'=>['inquilino.update',$ts->id],'method'=>'PUT','class'=>'form-horizontal','files'=> true]) !!}
        <!--<div class="form-group">
            <div class="col-sm-6">
            </div>
            {!! Form::label('FOTO',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
                {!!Form::label('Subir Foto',null,['class'=>''])!!}
                {!!Form::file('foto')!!}
            </div>
        </div>-->
        <div class="form-group">
            {!! Form::label('TIPO',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::select('tipo',['1'=>'Inquilino','2'=>'Dueño'],null,['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-3">

            </div>
            <div class="col-sm-3">

            </div>
        </div>
        <div class="form-group">
            {!! Form::label('NOMBRE COMPLETO',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('nom_inquilino',null,['class'=>'form-control','placeholder'=>'Nombre','required' => 'required']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno','required' => 'required']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno','required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('ESTADO CIVIL',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::select('edo_civil',['Soltero'=>'Soltero','Casado'=>'Casado'],$ts->edo_civil,['class'=>'form-control']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::label('SEXO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-9">
                    {!! Form::select('sexo',['Masculino'=>'Masculino','Femenino'=>'Femenino'],$ts->sexo,['class'=>'form-control']) !!}
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
                <input type="date" name="fecha_nac" value="{{$ts->fecha_nac}}" class="form-control col-sm-9" required="true">
            </div>
            {!! Form::label('LUGAR DE NACIMIENTO',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::select('lug_nac',['San Luis Potosi'=>'San Luis Potosi','Queretaro'=>'Queretaro'],$ts->lug_nac,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('DOMICILIO',null,['class'=>'control-label col-sm-3']) !!}
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
        <div class="form-group">
            {!! Form::label('',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('municipio',null,['class'=>'form-control','placeholder'=>'Municipio','required' => 'required']) !!}
            </div>
            <div class="col-sm-3">
                {!! Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ciudad','required' => 'required']) !!}
            </div>

            <div class="col-sm-3">
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('OCUPACION',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {!! Form::text('ocupacion',null,['class'=>'form-control','placeholder'=>'Puesto']) !!}
            </div>
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <!--<div class="form-group">
            {!! Form::label('RENUNCIA',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-3">
                {{link_to('archivos/r.docx','Descargar',['download'=>'Renuncia'])}}
            </div>
            <div class="col-sm-6">
                {!!Form::label('Adjuntar renuncia',null,['class'=>''])!!}
                {!!Form::file('renuncia',['required' => 'required'])!!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('IFE',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-6">
                {!!Form::label('Adjuntar IFE',null,['class'=>''])!!}
                {!!Form::file('ife')!!}
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('CURP',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-6">
                {!!Form::label('Adjuntar curp',null,['class'=>''])!!}
                {!!Form::file('curp')!!}
            </div>
            <div class="col-sm-3">
            </div>
        </div>-->
        <!--<div class="form-group">
            {!! Form::label('COMPROBANTE DE DOMICILIO',null,['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-6">
                {!!Form::label('Adjuntar Comprobante de domicilio',null,['class'=>''])!!}
                {!!Form::file('comp_dom')!!}
            </div>
            <div class="col-sm-3">
            </div>
        </div>-->
    </div>

    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! Form::open(['route'=>['inquilino.destroy',$ts->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop