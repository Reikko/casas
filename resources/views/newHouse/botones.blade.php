@extends('layouts.app')
@section('444')
    <!--
        Muestra unicamente cuantas queremos crear.
    -->
    <h2>Registrando propiedad</h2>
    {!!link_to('una/create','Unica',['class'=>'btn btn-primary btn-block'])!!}
    {!!link_to('varias/create','Varias',['class'=>'btn btn-primary btn-block'])!!}
@endsection