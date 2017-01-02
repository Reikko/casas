@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            {!! link_to('reporte/pdf/'.$reporte->id,'Imprimir reporte', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
        <div class="col-sm-3">
            {!! link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-primary btn-block']) !!}
        </div>
        <div class="col-sm-3">
            @if($reporte->cerrado == 0)
                {!! link_to_route('reporte.edit','Cerrar Reporte',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}
            @else
                {!! link_to_route('reporte.edit','Reporte Cerrado',$reporte->id, ['class' => 'btn btn-danger btn-block disabled']) !!}
            @endif
        </div>
    </div><br>

    <div class="row">
        @if($reporte->cerrado == 0)
            <div class="panel panel-success">
        @else
            <div class="panel panel-danger">
        @endif

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
                            @if($fila->f_realizacion != null)
                                <td>{{\Carbon\Carbon::parse($fila->f_realizacion)->format('d-m-Y')}}</td>
                            @else
                                <td>No terminado</td>
                            @endif

                            @if($fila->completo == 0 &&$reporte->cerrado == 0)
                                    <td>{!! link_to_action('TablaReporteControl@completarFila','Completar',$fila->id, ['class' => 'btn btn-danger btn-block']) !!}</td>
                            @else
                                    <td>{!! link_to_action('TablaReporteControl@completarFila','Completado',$fila->id, ['class' => 'btn btn-success btn-block disabled']) !!}</td>
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
            @if($reporte->cerrado == 0)
                {!! link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}
            @endif
        </div>
    </div><br>

    </div>

@stop