@extends('layouts.app')

@section('completo')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        En espera de Revision de Datos
    </div>
    <div class="panel panel-default">

        <div class="panel-body">
            <h2>{{$inq->nom_inquilino}} {{$inq->ap_pat}} {{$inq->ap_mat}}</h2>
            <h4>Ocupacion:  {{$inq->ocupacion}}</h4>
            <div class="col-sm-4">
                @if($inq->foto == 'imagen.jpg')
                    {{ Html::image(asset('imagen.jpg'), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px']) }}
                @else
                    {{ Html::image(asset('archivos/'.$inq->foto), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px']) }}
                @endif
            </div>
            <div class="col-sm-8">
                <h5>Fecha de nacimiento: {{$inq->fecha_nac}}</h5>
                <h5>Lugar de nacimiento: {{$inq->lug_nac}}</h5>
                <h5>Clave: {{$inq->id}}</h5>
                <h5>Estado civil: {{$inq->edo_civil}}</h5>
                <h5>Sexo: {{$inq->sexo}}</h5>
                <h5>Alias: {{$inq->alias}}</h5>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Domicilio</div>
        <div class="panel-body">
            <h5>Calle: {{$inq->calle}}</h5>
            <h5>Numero exterior:{{$inq->num_ext}} Numero interior:{{$inq->num_int}}</h5>
            <h5>{{$inq->colonia}}, {{$inq->municipio}}, {{$inq->estado}}  </h5>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">

            @if($inq->ife != null)
                <h5>IFE:
                    {{link_to('archivos/'.$inq->ife,'Descargar IFE',['target'=>'_blank','download'=> ''.$inq->id.'IFE_INQ'])}}</h5>
                @else
                    <h5>IFE: Sin Archivo</h5>
            @endif

            @if($inq->comp_dom != null)
            <h5>Comprobante de Domicilio:
                {{link_to('archivos/'.$inq->comp_dom,'Descargar Comprobante de Domicilio',['target'=>'_blank','download'=> ''.$inq->id.'DOMICILIO_INQ'])}}</h5>
                @else
                <h5>Comprobante de Domicilio:
                    Sin Comprobante</h5>
            @endif

            @if($inq->contrato != null)
                <h5>Contrato:
                    {{link_to('archivos/'.$inq->contrato,'Descargar Contrato',['target'=>'_blank','download'=> ''.$inq->id.'CONTRATO_INQ'])}}</h5>
            @else
                <h5>Contrato
                    Sin Contrato</h5>
            @endif

        </div>
    </div>
@stop