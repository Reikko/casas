@extends('layouts.admin')
@section('content')
    {!! Form::open(['route'=>'cdad.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('id_edo', $states,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre de la Ciudad') !!}
        {!! Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la colonia']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection