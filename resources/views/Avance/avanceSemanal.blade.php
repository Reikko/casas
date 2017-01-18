@extends('layouts.app')
@section('completo')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    {{$lote->nombre}}
                    {{link_to('avance/','Regresar a avances', ['class'=>'btn btn-primary'])}}
                    {{link_to('ingreso/'.$id,'Editar', ['class'=>'btn btn-primary'])}}
                </h1>
                <h4>Destajista: {{$avance[0]->nom_trab}} {{$avance[0]->ap_pat}}</h4>
                <h5>Folio/Avance N° : {{$avance[0]->id}}</h5>
                <h5>Fecha inicial: {{\Carbon\Carbon::parse($avance[0]->f_ini)->format(' d-m-Y')}}</h5>
                <h5>Fecha final: {{\Carbon\Carbon::parse($avance[0]->f_fin)->format(' d-m-Y')}}</h5>


            </div>
            <div class="panel-body">
                {!! Form::open(['route'=>'ingreso.store','method'=>'POST']) !!}
                {{ Form::hidden('id_avance',$id) }}
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CONCEPTO</th>
                        <th>PROCESO</th>
                        <th>AVANCE</th>
                        <th>PRECIO TOTAL</th>
                        <th>PRECIO POR AVANCE</th>
                    </tr>
                    </thead>
                    <?php
                        $subtotal = 0;
                    ?>
                    @foreach($filas as $fila)
                        @if($fila->porcentaje == 100)
                            <tr class="success">
                        @else
                            <tr>
                        @endif
                            <td>
                                {{$fila->id_destajo}}
                            </td>
                            <td>
                                {{$fila->concepto}}
                            </td>
                            <td>
                                {{$fila->descripcion}}
                            </td>
                            <td>
                                {{$fila->avance}} %
                            </td>
                            <td>
                                ${{ ($fila->destajo/100)*$fila->total}}
                            </td>
                            <td>
                                ${{ (($fila->destajo/100)*$fila->total)*($fila->porcentaje/100)}}
                                <?php
                                    $subtotal += (($fila->destajo/100)*$fila->total)*($fila->porcentaje/100);
                                ?>
                            </td>
                        </tr>

                    @endforeach

                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total acumulado</th>
                    <th>${{$subtotal}}</th>
                </table>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop