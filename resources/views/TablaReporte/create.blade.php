@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            {!! link_to_route('reporte.show','Regresar',$reporte->id_prop, ['class' => 'btn btn-default btn-block']) !!}
        </div>
    </div><br>

    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">Reportes</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Lugar</th>
                            <th>Tipo</th>
                            <th>Descripcion</th>
                            <th>Observación Cliente</th>
                            <th>Observación trabajador</th>
                            <th>Opcion</th>
                        </thead>

                        @foreach($filas as $num => $fila)
                            <tbody>
                            <td>{{$num + 1}}</td>
                            <td>{{$fila->id_lugar}}</td>
                            <td>{{$fila->num_defecto}}</td>
                            <td>{{$fila->completo}}</td>
                            <td>{{$fila->obs_clie}}</td>
                            <td>{{$fila->obs_trab}}</td>
                            <td> Editar </td>
                            </tbody>
                        @endforeach

                        {!! Form::open(['route'=>'tabla.store','method'=>'POST']) !!}
                        {{ Form::hidden('id_reporte', $reporte->id_prop, array('id' => 'invisible_id')) }}
                        <td></td>
                        <td>
                            {!! Form::select('id_lugar',$lugares,null,['class'=>'form-control']) !!}
                        </td>
                        <td>
                            {!! Form::select('tipo',$tipoDef,null,['class'=>'form-control']) !!}
                        </td>
                        <td>
                            {!! Form::select('num_defecto',$defecto,null,['class'=>'form-control']) !!}
                        </td>
                        <td>
                            {!! Form::textarea('obs_clie',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']) !!}
                        </td>
                        <td>
                            {!! Form::textarea('obs_trab',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']) !!}
                        </td>
                        <td>
                            {!! Form::submit('Agregar Cuota',['class'=>'btn btn-success btn-block']) !!}
                            {!! Form::close() !!}
                        </td>






                    </table>
                </div>
            </div>
        </div>

    </div>

@stop