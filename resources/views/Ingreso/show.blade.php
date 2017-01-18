@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
    </div><br>

    <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5>Destajista: {{$empleado->nombre}}</h5>
                    <h5>Lote: {{$lote->nombre}}</h5>
                    <h5>Folio N° : {{$avance->id}}</h5>
                    <h5>Fecha inicial semana: {{$avance->f_ini}}</h5>
                    <h5>Fecha final semana: {{$avance->f_fin}}</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Prototipo</th>
                            <th>Partida</th>
                            <th>Concepto</th>
                            <th>Descripcion</th>
                            <th>Unidad</th>
                            <th>Destajo</th>
                        </tr>
                        </thead>
                        @foreach($destajos as $num => $fila)
                            <tbody>
                                <tr class="info">
                                    <td>{{$num + 1}}</td>
                                    <td>{{$fila->prototipo}}</td>
                                    <td>{{$fila->partida}}</td>
                                    <td>{{$fila->concepto}}</td>
                                    <td>{{$fila->descripcion}}</td>
                                    <td>{{$fila->unidad}}</td>
                                    <td>$ {{$fila->destajo}}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div><br>

    </div>

@stop