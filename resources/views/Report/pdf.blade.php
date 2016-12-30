    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            table, td{
                font:100% Arial, Helvetica, sans-serif;
            }
            table{width:100%;border-collapse:collapse;margin:1em 0;}
            th, td{text-align:left;padding:.5em;border:1px solid #fff;}
            th{background:#328aa4 url(tr_back.gif) repeat-x;color:#fff;}
            td{background:#e5f1f4;}

            /* tablecloth styles */

            tr.even td{background:#e5f1f4;}
            tr.odd td{background:#f8fbfc;}

            th.over, tr.even th.over, tr.odd th.over{background:#4a98af;}
            th.down, tr.even th.down, tr.odd th.down{background:#bce774;}
            th.selected, tr.even th.selected, tr.odd th.selected{}

            td.over, tr.even td.over, tr.odd td.over{background:#ecfbd4;}
            td.down, tr.even td.down, tr.odd td.down{background:#bce774;color:#fff;}
            td.selected, tr.even td.selected, tr.odd td.selected{background:#bce774;color:#555;}

            /* use this if you want to apply different styleing to empty table cells*/
            td.empty, tr.odd td.empty, tr.even td.empty{background:#fff;}
        </style>
    </head>
    <body id="app-layout">
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
                                            <td>{{$fila->f_realizacion}}</td>
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
    </body>
    </html>