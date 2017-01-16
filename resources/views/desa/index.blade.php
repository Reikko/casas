@extends('layouts.app')
@section('completo')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <h1>Desarrollos</h1>
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Ciudad</th>
        <th>Desarrollo</th>
        <th>Unidades</th>
        <th>Responsable</th>
        <th>Modificar</th>
        <th>Ver Calles</th>
        <th>Ver Unidades</th>
        </thead>
        @foreach($dess as $d)
            <tbody>
            <td>{{$d->id}}</td>
            <td>{{$d->nom_cdad}}</td>
            <td>{{$d->nom_des}}</td>
            <td>{{$d->unidades}}</td>
            <td>{{$d->responsable}}</td>
            <td>
                {!!link_to_route('des.edit', $title = 'Editar', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary btn-block'])!!}
            </td>
            <td>
                {!!link_to_route('calle.show', $title = 'Ver Calles', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary btn-block'])!!}
            </td>
            <td>
                {!!link_to_route('des.show', $title = 'Ver Unidades', $parameters = $d->id, $attributes = ['class'=>'btn btn-primary btn-block'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop