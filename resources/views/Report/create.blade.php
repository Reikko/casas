@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            {!! link_to_route('nuevas.show','Regresar',$id, ['class' => 'btn btn-default btn-block']) !!}
        </div>
    </div><br>

    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-success">
                <div class="panel-heading">Reportes</div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha Reporte</th>
                            <th>Fecha fin</th>
                            <th>Estado</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Cerrar</th>
                        </tr>
                        </thead>
                    @foreach($reportes as $num => $reporte)
                        <tbody>
                        @if($reporte->cerrado == 0)
                            <tr class="success">
                        @else
                            <tr class="danger">
                        @endif
                                <td>{{$num + 1}}</td>
                                <td>{{$reporte->fecha_ini}}</td>
                                <td>{{$reporte->fecha_fin}}</td>
                                @if($reporte->cerrado == 0)
                                    <td>Abierto</td>
                                    <td>{!! link_to_route('tabla.show','Ver',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}</td>
                                    <td>{!! link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}</td>
                                    <td>{!! link_to_route('reporte.edit','Cerrar',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}</td>
                                @else
                                    <td>Cerrado</td>
                                    <td>{!! link_to_route('tabla.show','Solo Ver',$reporte->id, ['class' => 'btn btn-danger btn-block']) !!}</td>
                                    <td>{!! link_to_route('tabla.edit','Cerrado',$reporte->id, ['class' => 'btn btn-danger btn-block disabled']) !!}</td>
                                    <td>{!! link_to_route('reporte.edit','Cerrado',$reporte->id, ['class' => 'btn btn-danger btn-block disabled']) !!}</td>
                                @endif
                            </tr>
                        </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">Nuevo Reporte</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'reporte.store','method'=>'POST']) !!}
                    {{ Form::hidden('id_prop', $id) }}
                    {{ Form::hidden('tipo_rol', Auth::user()->rol) }}
                    @foreach($inquilinos as $inq)
                        {{ Form::radio('inqui', $inq->id_prop) }} {{$inq->nom_inquilino}} {{$inq->ap_pat}}  <br>
                    @endforeach
                    {{ Form::radio('inqui',Auth::user()->id, true) }} {{Auth::user()->name}}<br>
                    {!! Form::submit('Nuevo Reporte',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">Reportes</div>
            <div class="panel-body">
                <h5>Estado: {{$dir->estado}}</h5>
                <h5>Municipio: {{$dir->municipio}}</h5>
                <h5>{{$dir->tipo}}: {{$dir->asentamiento}}</h5>
                <h5>Tipo de zona: {{$dir->zona}}</h5>
                <h5>Tipo de Propiedad: {{$ts->tipo_prop}}</h5>
                <h5>Calle : {{$ts->calle}}</h5>
                <h5>Código Postal: {{$dir->cp}}</h5>
                <h5>Numero Exterior: {{$ts->num_ext}}</h5>
                <h5>Numero Interior: {{$ts->num_int}}</h5>
            </div>
        </div>
    </div>
@stop