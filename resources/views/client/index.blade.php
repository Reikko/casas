@extends('layouts.app')

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif

@section('content')
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Operacion</th>
        </thead>
        @foreach($clients as $client)
            <tbody>
            <td>{{$client->id}}</td>

            <td>{{$client->nombre, $client->ap_pat}} {{ $client->ap_pat}} {{ $client->ap_mat}}</td>
            <td>{{$client->tel}}</td>
            <td>{{$client->correo}}</td>
            <td>
                {!!link_to_route('client.edit', $title = 'Editar', $parameters = $client->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop