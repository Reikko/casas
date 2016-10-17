@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <h1>Calles Registradas</h1>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Ciudad</th>
        <th>Desarrollo</th>
        <th>Nombre Calle</th>
        <th>Editar</th>
        </thead>
        @foreach($calls as $c)
            <tbody>
            <td>{{$c->id}}</td>
            <td>{{$c->nom_cdad}}</td>
            <td>{{$c->id_des}}</td>
            <td>{{$c->nom_calle}}</td>
            <td>
                {!!link_to_route('calle.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop