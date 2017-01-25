@extends('layouts.app')

@section('444')
    <h3>Creando cuadrilla</h3>
    {!! Form::open(['route'=>'cuadrilla.store','method'=>'POST']) !!}

    <div class="form-group{{ $errors->has('encargado') ? ' has-error' : '' }}">
        <label for="encargado" class="control-label">Encargado</label>
        <input id="encargado" type="text" class="form-control" name="encargado" value="{{old('encargado')}}" >
        @if ($errors->has('encargado'))
            <span class="help-block">
                    <strong>{{ $errors->first('encargado') }}</strong>
                </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
        <label for="nombre" class="control-label">Nombre de la cuadrilla</label>
        <input id="nombre" type="text" class="form-control" name="nombre" value="{{old('nombre')}}" >
        @if ($errors->has('nombre'))
            <span class="help-block">
                    <strong>{{ $errors->first('nombre')}}</strong>
                </span>
        @endif
    </div>

    {!! Form::submit('Crear cuadrilla',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop