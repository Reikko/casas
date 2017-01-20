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
                        <th>NOMBRE</th>
                        <th>ENCARGADO</th>
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
                                {{$fila->nombre}}</td>
                            <td><!--Encargado-->
                                {{$fila->nom_trab}}{{$fila->ap_pat}} {{$fila->ap_mat}}</td>
                            <td><!--ver-->
                                {{link_to('avanceDestajista/'.$fila->encargado,'Ver', ['class'=>'btn btn-primary btn-block'])}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop