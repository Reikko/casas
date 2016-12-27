@extends('layouts.app')
@section('363')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif

        <div class="row">
            <div class="col-sm-4" >
            </div>
            <div class="col-sm-4" >
            </div>
            <div class="col-sm-4" >
                {!!link_to('fallo/create', $title = 'Crear nuevo',['class'=>'btn btn-success btn-block'])!!}
            </div>
        </div>

        <table class="table">
            <thead>
            <!--<th>Num</th>-->
            <th>Tipo</th>
            <th>Defecto</th>
            <th>Modificar</th>
            <th>Ver</th>
            </thead>
            @foreach($lugares as $lugar)
                <tbody>
                <!--<td>{{$lugar->id}}</td>-->
                <td>{{$lugar->nom_defecto}}</td>
                <td>{!!link_to_route('tipofallo.show','Defectos',$lugar->id,['class'=>'btn btn-primary btn-block'])!!}</td>
                <td>
                    {!!link_to_route('fallo.edit','Editar',$lugar->id,['class'=>'btn btn-warning btn-block'])!!}
                </td>
                <td>
                    {!! Form::open(['route'=>['fallo.destroy',$lugar->id],'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </td>
                </tbody>
            @endforeach
        </table>

    </div>
@stop