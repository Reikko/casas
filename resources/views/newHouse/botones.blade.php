@extends('layouts.app')
@section('444')
    <!--
        Muestra unicamente cuantas queremos crear.
    -->
    <h2>Registrando propiedad</h2>
    {!!link_to('nuevas/cp','Unica',['class'=>'btn btn-primary btn-block'])!!}
    {!!link_to('nuevas/cp','Varias',['class'=>'btn btn-primary btn-block'])!!}
@endsection