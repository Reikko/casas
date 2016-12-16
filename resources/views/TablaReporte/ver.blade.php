@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            {!! link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-default btn-block']) !!}
        </div>
    </div><br>

    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5>Reporte: N° {{$reporte->id}}</h5>
                <h5>Fecha: {{$reporte->fecha_ini}}</h5>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Lugar</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Observación Cliente</th>
                        <th>Observación trabajador</th>
                        <th>Fecha Realizacion</th>
                    </tr>
                    </thead>
                    @foreach($filas as $num => $fila)
                        <tbody>
                        <tr>
                            <td>{{$num + 1}}</td>
                            <td>{{$fila->nom_lugar}}</td>
                            <td>{{$fila->nom_defecto}}</td>
                            <td>{{$fila->descripcion}}</td>
                            <td>{{$fila->obs_clie}}</td>
                            <td>{{$fila->obs_trab}}</td>
                            <td>{{$fila->f_realizacion}}</td>

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
            {!! Form::open(['route'=>['reporte.destroy',$reporte->id],'method'=>'DELETE']) !!}
            {!! Form::submit('Eliminar Reporte',['class'=>'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div><br>

    </div>

@stop