@extends('layouts.app')
@section('completo')
    <div class="panel panel-default">
        <div class="panel-heading">Ubicación</div>
        <div class="panel-body">
            <h2>{{$ts->nom_trab}} {{$ts->ap_pat}} {{$ts->ap_mat}}</h2>
            <div class="col-sm-8">
                <h5>Estado: {{$dir->estado}}</h5>
                <h5>Municipio: {{$dir->municipio}}</h5>
                <h5>{{$dir->tipo}}: {{$dir->asentamiento}}</h5>
                <h5>Tipo de zona: {{$dir->zona}}</h5>
                <h5>Tipo de Propiedad: {{$ts->tipo}}</h5>
                <h5>Calle : {{$ts->calle}}</h5>
                <h5>Código Postal: {{$dir->cp}}</h5>
                <h5>Numero Exterior: {{$ts->num_ext}}</h5>
                <h5>Numero Interior: {{$ts->num_int}}</h5>
            </div>
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading"></div>
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
                            Mantenimiento
                            <span class="glyphicon glyphicon-wrench"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">
            <h5>Escrituras: </h5>
        </div>
    </div>

@endsection