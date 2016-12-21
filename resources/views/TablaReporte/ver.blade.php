@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            {!! link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-default btn-block']) !!}
        </div>
        <div class="col-sm-3">
            {!! link_to_route('reporte.edit','Cerrar Reporte',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}
        </div>
    </div><br>

    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5>Reporte: N° {{$reporte->id}}</h5>
                <h5>Fecha: {{$reporte->fecha_ini}}</h5>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Observación Cliente</th>
                        <th>Observación trabajador</th>
                        <th>Realizado</th>
                        <th>Opcion</th>
                    </tr>
                    </thead>
                    @foreach($filas as $num => $fila)
                        <tbody>
                        @if($fila->completo == 1)
                            <tr class="success">
                        @else
                            <tr class="danger">
                        @endif

                            <td>{{$num + 1}}</td>
                            <td>{{$fila->nom_lugar}}</td>
                            <td>{{$fila->nom_defecto}}</td>
                            <td>{{$fila->descripcion}}</td>
                            <td>{{$fila->obs_clie}}</td>
                            <td>{{$fila->obs_trab}}</td>
                            <td>{{$fila->f_realizacion}}</td>
                            @if($fila->completo == 0)
                                    <td>{!! link_to_action('TablaReporteControl@completarFila','Completar',$fila->id, ['class' => 'btn btn-success btn-block']) !!}</td>
                            @else
                                    <td>{!! link_to_action('TablaReporteControl@completarFila','Completar',$fila->id, ['class' => 'btn btn-danger btn-block disabled']) !!}</td>
                            @endif
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            {!! link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}
        </div>
    </div><br>

    </div>

@stop