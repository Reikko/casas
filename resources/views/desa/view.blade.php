@extends('layouts.app')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('completo')
    <h1>Calles del Desarrollo  {{$des->nom_des}}</h1>

    <table class="table">
        <thead>
        <th>{!!link_to_route('calle.create','Agregar Calle',$des->id, ['class'=>'btn btn-success'])!!}</th>
        <th>nombre</th>
        <th>Editar</th>

        </thead>
        @foreach($calles as $c)
            <tbody>
            <td>{{$c->id}}</td>
            <td>{{$c->nom_calle}}</td>
            <td>
                {!!link_to_route('des.edit', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-primary btn-block'])!!}
            </td>
            <td>
                {!!link_to_route('calle.create', $title = 'Agregar Calle', $parameters = $c->id, $attributes = ['class'=>'btn btn-success btn-block'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop