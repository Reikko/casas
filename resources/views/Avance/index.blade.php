@extends('layouts.app')
@section('completo')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Avances</h1>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="info">
                            <th>#</th>
                            <th>Lote</th>
                            <th>Empleado/Cuadrilla</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th>Opcion</th>
                        </tr>
                        </thead>
                        @foreach($avances as $num => $fila)
                            <tbody>
                                <tr>
                                    <td>{{$num + 1}}</td>
                                    <td>{{$fila->Lnombre}}</td>
                                    <td>{{$fila->nom_trab}} {{$fila->ap_pat}} {{$fila->ap_mat}}</td>
                                    <td>{{\Carbon\Carbon::parse($fila->f_ini)->format(' d-m-Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($fila->f_fin)->format(' d-m-Y')}}</td>
                                    <td>
                                        {{link_to('avance/'.$fila->id,'Ver', ['class'=>'btn btn-primary btn-block'])}}
                                        {{link_to('ingreso/'.$fila->id,'Editar', ['class'=>'btn btn-primary btn-block'])}}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
