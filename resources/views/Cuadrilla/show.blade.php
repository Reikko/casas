@extends('layouts.app')
@section('completo')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>ID Cuadrilla: {{$cuadrilla->id}}</h4>
                <h4>Nombre Cuadrilla: {{$cuadrilla->nombre}}</h4>
                <h4>Encargado: {{$cuadrilla->nom_trab}}{{$cuadrilla->ap_pat}}{{$cuadrilla->ap_mat}}</h4>
                <div class="row">
                    <div class="col-xs-6"></div>
                    <div class="col-xs-2">{{link_to('cuadrilla', 'Regresar',['class'=>'btn btn-default btn-block'])}}</div>
                    <div class="col-xs-2">{{link_to_route('cuadrilla.edit', 'Editar',$cuadrilla->id,['class'=>'btn btn-warning btn-block'])}}</div>
                    <div class="col-xs-2">{{link_to('cuadrilla', 'Eliminar Cuadrilla',['class'=>'btn btn-danger btn-block'])}}</div>
                </div>

            </div>
            <div class="panel-body">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>Agregados</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trabajador</th>
                                <th>Opcion</th>
                            </tr>
                            </thead>
                            @foreach($empleados as $empleado)
                                <tr>
                                    <td>{{$empleado->id_trabajador}}</td>
                                    <td>{{$empleado->nom_trab}}{{$empleado->ap_pat}}{{$empleado->ap_mat}}</td>
                                    <td>
                                        {!! Form::open(['route'=>['asignaCuadrilla.destroy',$empleado->id],'method'=>'DELETE']) !!}
                                        {!! Form::submit('Quitar',['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>Faltan por Asignar</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Trabajador</th>
                                <th>Opcion</th>
                            </tr>
                            </thead>
                            @foreach($trabajadores as $trabajador)
                                <tr>
                                    <td>{{$trabajador->id}}</td>
                                    <td>{{$trabajador->nom_trab}} {{$trabajador->ap_pat}} {{$trabajador->ap_mat}}</td>
                                    <td>
                                        {!! Form::open(['route'=>'asignaCuadrilla.store','method'=>'POST']) !!}
                                            {{ Form::hidden('id_cuadrilla', $cuadrilla->id) }}
                                            {{ Form::hidden('id_trabajador', $trabajador->id) }}
                                            {!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop