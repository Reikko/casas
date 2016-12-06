@extends('layouts.app')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif

@section('completo')
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Estado</th>
        <th>Calle colonia</th>
        <th>Tipo</th>
        <th>Ver Propiedad</th>
        <th>Editar</th>
        </thead>

        @foreach($casas as $casa)
            <tbody>
                <tr class="success">
                    <td>{{$casa->id}}</td>
                    <td>{{$casa->municipio}},{{$casa->estado}} </td>
                    <td> {{$casa->calle}} #{{$casa->num_ext}}, {{$casa->tipo}}:{{$casa->asentamiento}}</td>
                    <td>{{$casa->tipo_prop}}</td>
                    <td>{!!link_to_route('nuevas.show','Ver Propiedad', $casa->id, ['class'=>'btn btn-primary'])!!}</td>
                    <td>{!!link_to_route('nuevas.edit','Editar', $casa->id, ['class'=>'btn btn-primary'])!!}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
@stop