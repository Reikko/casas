@extends('layouts.app')
@section('content')
    <div class="col-sm-3" >

    </div>

    <div class="row col-sm-6">
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                @include('estado.forms.formEdo')
                <br>
                <button type="button" data-toggle="collapse" class="btn btn-danger btn-block" href="#collapse1"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
            </div>
        </div>
        <h3>CREANDO NUEVA CIUDAD</h3>
        {!! Form::open(['route'=>'cdad.store','method'=>'POST']) !!}
        <div class="form-group">

            {!! Form::label('Estado:',null,['class'=>'control-label col-sm-12']) !!}<br>
            {!! Form::select('id_edo', $states,null,['class'=>'form-control col-sm-12' ]) !!}

            <div class="row">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Agregar Estado</a>
                </h4>
            </div>

        </div>
        <div class="form-group">
            {!! Form::label('Nombre de la Ciudad',null,['class'=>'control-label']) !!}
            {!! Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la ciudad']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3">
    </div>

@endsection