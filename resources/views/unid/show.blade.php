@extends('layouts.app')
@section('completo')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif



    <h4>Asignada a: {{$duenio->nombre}} {{$duenio->ap_pat}} {{$duenio->ap_mat}}</h4>
    <h4>Telefono: {{$duenio->tel}} </h4>
    <h4>Correo: {{$duenio->correo}} </h4>
    <h4>Usuario: {{$duenio->usuario}} </h4>

    <h4>Unidad Habitacional # {{$un->id}}</h4>
    <h4>Calle: {{$un->id_calle}}</h4>
    <h4>Numero Exterior: {{$un->num_ext}}</h4>
    <h4>Numero Interior: {{$un->num_int}}</h4>
    <h4>Tipo de casa: {{$un->tipo}}</h4>
    {!!link_to_route('des.edit', $title = 'Agregar Usuario', $parameters = $duenio->id, $attributes = ['class'=>'btn btn-primary'])!!}


@stop