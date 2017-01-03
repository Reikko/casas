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
            {!! link_to_route('tabla.edit','Regresar',$reporte->id, ['class' => 'btn btn-default btn-block']) !!}
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
                        <th>Opción</th>
                    </tr>
                    </thead>
                    @foreach($filas as $num => $fila)
                        <tbody>
                            @if($fila->id == $id)
                                <tr class="success">
                                    {!! Form::model($f,['route'=>['tabla.update',$f->id],'method'=>'PUT']) !!}
                                    {{ Form::hidden('id_reporte', $f->id_reporte, array('id' => 'invisible_id')) }}
                                    <td></td>
                                    <td>
                                        {!! Form::select('id_lugar',$lugares,$f->id_lugar,['class'=>'form-control']) !!}
                                    </td>
                                    <td>
                                        {!! Form::select('tipo',$tipoDef,$defe->id_t_defecto,['class'=>'form-control','id'=>'tipoDef']) !!}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                Opciones <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Agregar</a></li>
                                                <li><a href="#">Ver</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        {!! Form::select('num_defecto',$defecto,$f->num_defecto,['class'=>'form-control','id'=>'defecto']) !!}
                                    </td>
                                    <td>
                                        {!! Form::textarea('obs_clie',$f->obs_clie,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']) !!}
                                    </td>
                                    <td>
                                        {!! Form::textarea('obs_trab',$f->obs_trab,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']) !!}
                                    </td>
                                    <td>
                                        {!! Form::submit('Guardar',['class'=>'btn btn-success btn-block']) !!}
                                        {!! Form::close() !!}
                                        {!! Form::open(['route'=>['tabla.destroy',$f->id],'method'=>'DELETE']) !!}
                                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td>{{$num + 1}}</td>
                                    <td>{{$fila->nom_lugar}}</td>
                                    <td>{{$fila->nom_defecto}}</td>
                                    <td>{{$fila->descripcion}}</td>
                                    <td>{{$fila->obs_clie}}</td>
                                    <td>{{$fila->obs_trab}}</td>
                                    <td>
                                        {!! link_to('tabla/'.$reporte->id.'/edit/'.$fila->id,'Editar', ['class' => 'btn btn-default btn-block']) !!}
                                        {!! Form::open(['route'=>['tabla.destroy',$fila->id],'method'=>'DELETE']) !!}
                                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endif
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