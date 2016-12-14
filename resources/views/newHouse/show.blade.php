@extends('layouts.app')
@section('completo')
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">Ocupantes</div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed">
                        <thead>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        </thead>

                        @foreach($ocupantes as $t)
                            <tr class="success">
                                <td>{{$t->id_prop}}</td>
                                <td>
                                    @if($t->foto == 'imagen.jpg')
                                        {{ Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 70px']) }}
                                    @else
                                        {{ Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 70px']) }}
                                    @endif
                                    <br>
                                    {{link_to_route('inquilino.show', $title = 'Ver', $t->id_prop,['class'=>'btn btn-primary btn-block'])}}</td>
                                <td>{{$t->nom_inquilino}} {{$t->ap_pat}} {{$t->ap_mat}}</td>
                                <td>
                                    @if($t->tipo == 1)
                                        Inquilino
                                    @else
                                        Dueño
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!!link_to('nuevas/'.$ts->id.'/create','Editar ocupantes',['class'=>'btn btn-success btn-block'])!!}
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">Ubicación</div>
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
                        {!!link_to_route('nuevas.edit','Editar',$ts->id,['class'=>'btn btn-success btn-block'])!!}
                </div>
            </div>
        </div>


        <div class="col-sm-4"><!--Muestra los servicios Generados-->

            <div class="panel panel-info">
                <div class="panel-heading">Servicios</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>#</th>
                        <th>Servicio</th>
                        <th>Monto</th>
                        </thead>
                    @foreach($cuotas as $num => $cuota)
                            <tbody>
                                <td>{{$num + 1}}</td>
                                <td> {{$cuota->nom_cuota}}</td>
                                <td> ${{$cuota->monto}}</td>
                            </tbody>
                    @endforeach
                    </table>
                    {!!link_to('cuota/create/'.$ts->id,'Agrega',['class'=>'btn btn-success btn-block glyphicon glyphicon-wrench'])!!}
                </div>
            </div>
        </div>

    </div>

    <div class="panel panel-info">
        <div class="panel-heading">Administrar Propiedad</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Contabilidad
                            <span class="glyphicon glyphicon-th-list"></span>
                        </button>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Recordatorios
                            <span class="glyphicon glyphicon-time"></span>
                        </button>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Reportes
                            <span class="glyphicon glyphicon-wrench"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>





@endsection