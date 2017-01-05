@extends('layouts.app')

@section('444')
    <h3>Datos del Cliente</h3>
    {!! Form::open(['route'=>'client.store','method'=>'POST']) !!}

    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
        <label for="nombre" class="control-label">Nombre(s)</label>
            <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }} " >
            @if ($errors->has('nombre'))
                <span class="help-block">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('ap_pat') ? ' has-error' : '' }}">
        <label for="ap_pat" class="control-label">Apellido paterno</label>
        <input id="ap_pat" type="text" class="form-control" name="ap_pat" value="{{ old('ap_pat') }} " >
        @if ($errors->has('ap_pat'))
            <span class="help-block">
                    <strong>{{ $errors->first('ap_pat')}}</strong>
                </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('ap_mat') ? ' has-error' : '' }}">
        <label for="ap_mat" class="control-label">Apellido materno</label>
        <input id="ap_mat" type="text" class="form-control" name="ap_mat" value="{{ old('ap_mat') }} " >
        @if ($errors->has('ap_mat'))
            <span class="help-block">
                    <strong>{{ $errors->first('ap_mat')}}</strong>
                </span>
        @endif
    </div>


    <div class="form-group">
        {!! Form::label('Telefono') !!}
        {!! Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">Correo electronico</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Nombre de Usuario</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }} " >
        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="control-label">Password</label>
            <input id="password" type="password" class="form-control" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label for="password-confirm" class="control-label">Confirmar Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
    </div>


    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
