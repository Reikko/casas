    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!--{!! Html::style('assets/css/bootstrap.css') !!}
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>-->
        <style>
            table, td{
                font:100% Arial, Helvetica, sans-serif;
            }
            table{width:100%;border-collapse:collapse;margin:1em 0;}
            th, td{text-align:left;padding:.5em;border:1px solid #fff;}
            th{background:#328aa4  repeat-x;color:#fff;}
            td{background:#e5f1f4;}

            /* tablecloth styles */

            tr.even td{background:#e5f1f4;}
            tr.odd td{background:#f8fbfc;}

            /* use this if you want to apply different styleing to empty table cells*/
            td.empty, tr.odd td.empty, tr.even td.empty{background:#fff;}
        </style>
    </head>
    <body id="app-layout">
    <div class="row">
        <div class="row">
            <div class="col-sm-4">
                Casas Crece
            </div>
            <div class="col-sm-4">
                <div class="panel-heading">
                    <h5>Reporte: N° {{$reporte->id}}</h5>
                    <h5>Fecha: {{\Carbon\Carbon::parse($reporte->fecha_ini)->format('d-m-Y')}}</h5>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div><br>
            <div class="panel panel-success">

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
                                    @if($fila->f_realizacion != null)
                                        <td>{{\Carbon\Carbon::parse($fila->f_realizacion)->format('d-m-Y')}}</td>
                                    @else
                                        <td>No terminado</td>
                                    @endif
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>