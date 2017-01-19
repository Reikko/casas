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
                        <th>ID</th>
                        <th>CUADRILLA</th>
                        <th>DESCRIPCION</th>
                        <th>VER AVANCE</th>
                    </tr>
                    </thead>
                    <?php
                    $subtotal = 0;
                    ?>
                    @foreach($cuadrillas as $fila)

                        <tr>
                            <td> <!--id-->
                                {{$fila->id}}</td>
                            <td><!--Cuadrilla/Nombre-->
                                {{$fila->nom_trab}}{{$fila->ap_pat}} {{$fila->ap_mat}}</td>
                            <td><!--descripcion-->
                                </td>
                            <td><!--ver-->
                                {{link_to('avanceCuadrilla/'.$fila->id,'Ver', ['class'=>'btn btn-primary btn-block'])}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop