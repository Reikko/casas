@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>{{$lote->nombre}}
                    {{link_to('avance','Regresar', ['class'=>'btn btn-primary'])}}
                </h1>
            </div>
            <div class="panel-body">
                {!! Form::open(['route'=>'ingreso.store','method'=>'POST']) !!}
                {{ Form::hidden('id_avance',$id) }}
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CONCEPTO</th>
                        <th>DESCRIPCION</th>
                        <th>AVANCE</th>
                        <th>PRECIO TOTAL</th>
                        <th>PRECIO POR AVANCE</th>
                    </tr>
                    </thead>
                    <?php
                    $subtotal = 0;
                    ?>
                    @foreach($filas as $fila)

                            <tr>
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
                                    {{$fila->porcentaje}}
                                </td>
                                <td>
                                    ${{$fila->destajo}}
                                </td>
                                <td>
                                    ${{$fila->destajo*$fila->porcentaje}}
                                    <?php
                                    $subtotal += $fila->destajo*$fila->porcentaje;
                                    ?>
                                </td>
                            </tr>

                            @endforeach

                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total acumulado</th>
                            <th>${{$subtotal}}</th>
                </table>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop