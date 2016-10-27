@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        En espera de Revision de Datos
    </div>
    <div class="panel panel-default">

        <div class="panel-body">
            <h2>{{$ts->nom_trab}} {{$ts->ap_pat}} {{$ts->ap_mat}}</h2>
            <h4>Puesto:  {{$ts->puesto}}</h4>
            <div class="col-sm-4">
                {{ Html::image(asset('archivos/'.$arc->foto), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px']) }}

            </div>
            <div class="col-sm-8">
                <h5>Fecha de nacimiento: {{$ts->fecha_nac}}</h5>
                <h5>Lugar de nacimiento: {{$ts->lug_nac}}</h5>
                <h5>Clave: {{$ts->id}}</h5>
                <h5>Estado civil: {{$ts->edo_civil}}</h5>
                <h5>Sexo: {{$ts->sexo}}</h5>
                <h5>Alias: {{$ts->alias}}</h5>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Domicilio</div>
        <div class="panel-body">
            <h5>Calle: {{$ts->calle}}</h5>
            <h5>Numero exterior:{{$ts->num_ext}} Numero interior:{{$ts->num_int}}</h5>
            <h5>{{$ts->colonia}}, {{$ts->municipio}}, {{$ts->estado}}  </h5>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">
            <h5>RFC: {{$ts->rfc}} <a href="archivos/{{$arc->renuncia}}" target="_blank"> Descargar RFC</a></h5>
            <h5>Numero de Seguro: {{$ts->num_seguro}} <a href="archivos/{{$arc->com_seguro}}" target="_blank"> Descargar Seguro</a></h5>
            <h5>Renuncia: <a href="archivos/{{$arc->renuncia}}" target="_blank">Descargar Renuncia</a></h5>
            <h5>IFE:<a href="archivos/{{$arc->ife}}" target="_blank">Descargar IFE</a></h5>
            <h5>Comprobante de Domicilio:<a href="archivos/{{$arc->comp_dom}}" target="_blank">Descargar IFE</a></h5>
            <h5>Curp:<a href="archivos/{{$arc->curp}}" target="_blank">Descargar Curp</a></h5>
            <h5>Prueba: {{link_to('archivos/'.$arc->renuncia,'Descargar Prueba',['target'=>'_blank','download'=>'Prueba'])}} </h5>

        </div>
    </div>
@stop