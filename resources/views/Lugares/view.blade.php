@extends('layouts.app')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('seis')
    <h1>Ciudades de {{$estad->nom_edo}}</h1>
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Ciudades</th>
        <th>Modificar</th>
        <th>Ver</th>
        </thead>
        @foreach($ciu as $c)
            <tbody>
            <td>{{$c->id}}</td>
            <td>{{$c->nom_cdad}}</td>
            <td>
                {!!link_to_route('cdad.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            <td>
                {!!link_to_route('cdad.show', $title = 'Ver Desarrollos', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop