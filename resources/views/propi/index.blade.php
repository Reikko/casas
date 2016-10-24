@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
$var = 0;
@section('content')
    <button>{!!link_to('calle/edit', $title = 'Editar Unidades')!!}</button>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Asignada</th>
        <th>Editar</th>
        </thead>
        <?php $var = 0; ?>

        @foreach($propiedades as $propiedad)
            {{$var++}}
            <tbody>
            <td>{{$var}}</td>
            <td>{{$propiedad->nom_calle}}</td>
            <td>{{$propiedad->num_ext}}</td>
            <td>{{$propiedad->num_int}}</td>
            <td>{{$propiedad->asignada}}</td>
            <td>{{$propiedad->editable}}</td>
            </tbody>
        @endforeach
    </table>

@stop