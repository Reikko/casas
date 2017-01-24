@extends('layouts.app')
@section('completo')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Avance :{{$datosCuadrilla->nombre}}</h4>
            </div>
            <div class="panel-body">
        @foreach($cuadrillas as $cuadrilla)
                <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>{{$cuadrilla->nombre}}</h4>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CONCEPTO</th>
                        <th>PROCESO</th>
                        <th>AVANCE</th>
                        <th>PRECIO TOTAL</th>
                        <th>PRECIO POR AVANCE</th>
                    </tr>
                    </thead>
                    <?php
                    $subtotal = 0;
                    ?>
                    @foreach($filas as $fila)
                        @if($cuadrilla->id == $fila->id_avance)
                            @if($fila->porcentaje == 100)
                                <tr class="success">
                            @else
                                <tr>
                                    @endif
                                    <td>
                                        {{$fila->id_destajo}}
                                    </td>
                                    <td>
                                        {{$fila->concepto}}
                                    </td>
                                    <td>
                                        {{$fila->descripcion}}
                                    </td>
                                    <td>
                                        {{$fila->avance}} %
                                    </td>
                                    <td>
                                        ${{ ($fila->destajo/100)*$fila->total}}
                                    </td>
                                    <td>
                                        ${{ (($fila->destajo/100)*$fila->total)*($fila->porcentaje/100)}}
                                        <?php
                                        $subtotal += (($fila->destajo/100)*$fila->total)*($fila->porcentaje/100);
                                        ?>
                                    </td>
                                </tr>
                        @endif
                    @endforeach


                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total acumulado</th>
                            <th>${{$subtotal}}</th>
                </table>
            </div>
        </div>
                    </div>
        @endforeach
                </div>
        </div>
    </div>
@stop