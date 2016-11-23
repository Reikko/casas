@extends('layouts.app')
@section('363')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <button>{!!link_to_route('unidad.edit', $title = 'Editar',$id)!!}</button>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Asignada</th>
        <th>Ver</th>
        <th>Eliminar</th>
        </thead>

        @foreach($propiedades as $key =>$propiedad)

            <tbody>
            <td>{{$key+1}}</td>
            <td>{{$propiedad->nom_calle}}</td>
            <td>{{$propiedad->num_ext}}</td>
            <td>{{$propiedad->num_int}}</td>
            <td>{{$propiedad->id_clie}}</td>
            <td>{!!link_to_route('unidad.show', $title = 'Ver Unidad',$propiedad->id,['class'=>'btn btn-info btn-block'])!!}</td>
            <td>
                {!! Form::open(['route'=>['unidad.destroy',$propiedad->id],'method'=>'DELETE']) !!}
                {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </td>
            </tbody>
        @endforeach
    </table>

@stop