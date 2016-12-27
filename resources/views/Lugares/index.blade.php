@extends('layouts.app')
@section('363')
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif
        <table class="table">
            <thead>
            <!--<th>Num</th>-->
            <th>Lugar</th>
            <th>Modificar</th>
            <th>Ver</th>
            </thead>
            @foreach($lugares as $lugar)
                <tbody>
                <!--<td>{{$lugar->id}}</td>-->
                <td>{{$lugar->nom_lugar}}</td>
                <td>
                    {!!link_to_route('lugar.edit','Editar',$lugar->id,['class'=>'btn btn-warning btn-block'])!!}
                </td>
                <td>
                    {!! Form::open(['route'=>['lugar.destroy',$lugar->id],'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </td>
                </tbody>
            @endforeach
        </table>

    </div>
@stop