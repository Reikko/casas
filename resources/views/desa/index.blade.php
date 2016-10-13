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
        <th>Ciudades</th>
        <th>Modificar</th>
        <th>Ver</th>
        </thead>
        @foreach($dess as $d)
            <tbody>
            <td>{{$d->id}}</td>
            <td>{{$d->nom_cdad}}</td>
            <td>
                {!!link_to_route('des.edit', $title = 'Editar', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            <td>
                {!!link_to_route('des.edit', $title = 'Ver Desarrollos', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop