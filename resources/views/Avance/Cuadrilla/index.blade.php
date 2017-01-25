@extends('layouts.app')
@section('completo')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nombre cuadrilla</th>
                        <th>Encargado</th>
                        <th>Avance</th>
                    </tr>
                    </thead>
                    @foreach($cuadrillas as $fila)
                        <tr>
                            <td><!--Cuadrilla/Nombre-->
                                {{$fila->nombre}}</td>
                            <td><!--Encargado-->
                                {{$fila->nom_trab}}{{$fila->ap_pat}} {{$fila->ap_mat}}</td>
                            <td><!--ver-->
                                {{link_to('avanceCuadrilla/'.$fila->id_cuadrilla,'Ver', ['class'=>'btn btn-primary btn-block'])}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop