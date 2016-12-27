@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            {!! link_to_route('tabla.show','Ver reporte',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}
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
                            <th>Editar</th>
                            <th>Eliminar</th>
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
                                <td> Editar </td>
                                <td>
                                    {!! Form::open(['route'=>['tabla.destroy',$fila->id],'method'=>'DELETE']) !!}
                                    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            </tbody>
                        @endforeach

                        {!! Form::open(['route'=>'tabla.store','method'=>'POST']) !!}
                        {{ Form::hidden('id_reporte', $reporte->id, array('id' => 'invisible_id')) }}
                        <td></td>
                        <td>
                            {!! Form::select('id_lugar',$lugares,null,['class'=>'form-control']) !!}
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">+</button>
                                {!! link_to('lugar','Ver todos', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </td>
                        <td>
                            {!! Form::select('tipo',$tipoDef,1,['class'=>'form-control','id'=>'tipoDef']) !!}
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">+</button>
                                {!! link_to('fallo','Ver todos', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </td>
                        <td width="250">
                            {!! Form::select('num_defecto',$defecto,null,['class'=>'form-control','id'=>'defecto']) !!}
                            {!! link_to('tipofallo','Ver todos', ['class' => 'btn btn-success btn-block']) !!}
                        </td>
                        <td>
                            {!! Form::textarea('obs_clie',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '2','cols'=> '20']) !!}
                        </td>
                        <td>
                            {!! Form::textarea('obs_trab',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '2','cols'=> '20']) !!}
                        </td>
                        <td>
                            {!! Form::submit('Agregar Fallo',['class'=>'btn btn-success btn-block']) !!}
                            {!! Form::close() !!}
                        </td>
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