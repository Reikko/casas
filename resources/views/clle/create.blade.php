@extends('layouts.app')
@section('content')

    {!! Form::open(['route'=>'calle.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('ciudad:') !!}
        {!! Form::select('id_cdad', $ciudades,null,['class'=>'form-control','id'=>'calle_cdad_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('desarrollo:') !!}
        {!! Form::select('id_des', $desarrolls,null,['class'=>'form-control','id'=>'des_sel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre de la Calle') !!}
        {!! Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection