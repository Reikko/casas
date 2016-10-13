@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
        <th>Num</th>
        <th>Estado</th>
        </thead>
        @foreach($estados as $estado)
            <tbody>
            <td>{{$estado->id}}</td>
            <td>{{$estado->nom_edo}}</td>
            <td>
                {!!link_to_route('edo.edit', $title = 'Editar', $parameters = $estado->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop