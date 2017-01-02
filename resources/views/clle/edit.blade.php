@extends('layouts.app')
@section('444')
    {!! link_to_route('calle.show','Regresar',$call->id_des, ['class' => 'btn btn-primary']) !!}
    {!! Form::model($call,['route'=>['calle.update',$call->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('Ciudad:') !!}
        {!! Form::select('id_cdad', $ciudades,$desa->id_cdad,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Desarrollo:') !!}
        {!! Form::select('id_des', $desarrolls,$call->id_des,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre de la Calle') !!}
        {!! Form::text('nom_calle',null,['class'=>'form-control','placeholder'=>'Nombre de la calle']) !!}
    </div>
    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    {!! Form::open(['route'=>['calle.destroy',$call->id,$call->id_des],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection