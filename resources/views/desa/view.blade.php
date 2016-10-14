@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <h1>Calles del Desarrollo  {{$des->nom_des}}</h1>
    <table class="table">
        <thead>
        <th>#</th>
        <th>nombre</th>
        <th>Numero Ext</th>
        <th>Numero Int</th>

        </thead>
        @foreach($calles as $c)
            <tbody>
            <td>{{$c->id}}</td>
            <td>{{$c->nom_cdad}}</td>
            <td>
                {!!link_to_route('call.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            <td>
                {!!link_to_route('call.edit', $title = 'Asignar Cliente', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop