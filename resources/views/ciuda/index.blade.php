@extends('layouts.app')
@section('363')
    <h1>Ciudades Registradas </h1>
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Editar</th>
        <th>Ver</th>
        </thead>
        @foreach($ciudades as $ciudad)
            <tbody>
            <td>{{$ciudad->id}}</td>
            <td>{{$ciudad->nom_edo}}</td>
            <td>{{$ciudad->nom_cdad}}</td>
            <td>
                {!!link_to_route('cdad.edit', $title = 'Editar', $parameters = $ciudad->id, $attributes = ['class'=>'btn btn-warning btn-block'])!!}
            </td>
            <td>
                {!!link_to_route('cdad.show', $title = 'Ver Desarrollos', $parameters = $ciudad->id, $attributes = ['class'=>'btn btn-success btn-block'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop