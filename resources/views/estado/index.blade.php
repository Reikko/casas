@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Estado</th>
        <th>Modificar</th>
        <th>Ver</th>
        </thead>
        @foreach($estados as $estado)
            <tbody>
            <td>{{$estado->id}}</td>
            <td>{{$estado->nom_edo}}</td>
            <td>
                {!!link_to_route('edo.edit', $title = 'Editar', $parameters = $estado->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            <td>
                {!!link_to_route('edo.show', $title = 'Ver Ciudades', $parameters = $estado->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
    @stop