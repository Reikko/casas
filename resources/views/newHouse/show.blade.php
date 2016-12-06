@extends('layouts.app')
@section('completo')
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">Documentos</div>
                <div class="panel-body">
                    <h5>Escrituras: </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-success">
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

        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">Servicios</div>
                <div class="panel-body">
                    {!!link_to('cuota/create/'.$ts->id,'Agrega',['class'=>'btn btn-success btn-block'])!!}
                    <button type="button" class="form-control btn btn-success">
                        Agregar Cuotas
                        <span class="glyphicon glyphicon-wrench"></span>
                    </button>
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
                                Inquilinos
                                <span class="glyphicon glyphicon-user"></span>
                            </button>
                        </td>
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