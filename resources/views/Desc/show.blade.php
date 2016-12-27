@extends('layouts.app')
@section('363')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif

        <h1>Defecto tipo: {{$tipo->nom_defecto}}</h1>
        <div class="row">
            <div class="col-sm-4" >
            </div>
            <div class="col-sm-4" >
                {!!link_to('fallo', $title = 'Regresar',['class'=>'btn btn-default btn-block'])!!}
            </div>
            <div class="col-sm-4" >
                {!!link_to('tipofallo/'.$tipo->id.'/create', $title = 'Crear nuevo',['class'=>'btn btn-success btn-block'])!!}
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Ver</th>
            </tr>
            </thead>
            @foreach($lugares as $lugar)
                <tbody>
                <tr>
                    <td>{{$lugar->descripcion}}</td>
                    <td>
                        {!!link_to_route('tipofallo.edit','Editar',$lugar->id,['class'=>'btn btn-warning btn-block'])!!}
                    </td>
                    <td>
                        {!! Form::open(['route'=>['tipofallo.destroy',$lugar->id],'method'=>'DELETE']) !!}
                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>

                </tbody>
            @endforeach
        </table>

    </div>
@stop