@extends('layouts.app')
@section('363')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
        {!!link_to('des','Regresar',['class'=>'btn btn-primary btn-block'])!!}
    </div>
    <div class="col-sm-3">
        {!!link_to_route('unidad.edit','Editar',$id,['class'=>'btn btn-primary btn-block'])!!}
    </div>
    <br>
    <br>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <th>#</th>
            <th>Nombre de la Calle</th>
            <th>Numero Exterior</th>
            <th>Numero Interior</th>
            <th>Editable</th>
            <th>Ver</th>
            <th>Eliminar</th>
            </thead>

            @foreach($propiedades as $key =>$propiedad)

                <tbody>
                <td>{{$key+1}}</td>
                <td>{{$propiedad->nom_calle}}</td>
                <td>{{$propiedad->num_ext}}</td>
                <td>{{$propiedad->num_int}}</td>
                <td>{{$propiedad->editable}}</td>
                <td>{!!link_to_route('unidad.show', $title = 'Ver Unidad',$propiedad->id,['class'=>'btn btn-success btn-block'])!!}</td>
                <td>
                    {!! Form::open(['route'=>['unidad.destroy',$propiedad->id],'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop