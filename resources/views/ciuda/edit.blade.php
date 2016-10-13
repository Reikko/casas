@extends('layouts.admin')

@section('content')
    {!! Form::model($ciu,['route'=>['cdad.update',$ciu->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('id_edo', $states,$ciu->id_edo,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre de la Ciudad:') !!}
        {!! Form::text('nom_cdad',null,['class'=>'form-control','placeholder'=>'Nombre de la Ciudad']) !!}
    </div>
    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! Form::open(['route'=>['cdad.destroy',$ciu->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection