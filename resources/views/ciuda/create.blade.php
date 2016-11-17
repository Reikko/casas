@extends('layouts.app')
@section('completo')
    <div class="col-sm-4" >
    </div>

    <div class="row col-sm-4">

        <h3>CREANDO NUEVA CIUDAD</h3>
        {!! Form::open(['route'=>'cdad.store','method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::select('id_edo',$estados,null,['class'=>'form-control','id'=>'edo_sel','required'=>true]) !!}
            {!! Form::label('Nombre de la Ciudad',null,['class'=>'control-label']) !!}
            {!! Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la ciudad']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
    </div>

@endsection