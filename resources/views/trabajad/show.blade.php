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
            <h2>{{$ts->nom_trab}} {{$ts->ap_pat}} {{$ts->ap_mat}}</h2>
            <h4>Puesto:  {{$ts->puesto}}</h4>
            <div class="col-sm-4">
                @if($arc->foto == 'imagen.jpg')
                    {{ Html::image(asset('imagen.jpg'), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px']) }}
                    @else
                    {{ Html::image(asset('archivos/'.$arc->foto), 'a picture', ['class' => 'img-thumbnail img-responsive','style'=>'width: 200px']) }}
                @endif
            </div>
            <div class="col-sm-8">
                <h5>Fecha de nacimiento: {{$ts->fecha_nac}}</h5>
                <h5>Lugar de nacimiento: {{$ts->lug_nac}}</h5>
                <h5>Clave: {{$ts->id}}</h5>
                <h5>Estado civil: {{$ts->edo_civil}}</h5>
                <h5>Sexo: {{$ts->sexo}}</h5>
                <h5>Usuario: {{$ts->alias}}</h5>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">Domicilio</div>
                <div class="panel-body">
                    <h5>Calle: {{$ts->calle}}</h5>
                    <h5>Numero exterior: #{{$ts->num_ext}}</h5>
                    <h5> Numero interior:{{$ts->num_int}}</h5>
                    <h5>{{$ts->colonia}}, {{$ts->municipio}}, {{$ts->estado}}  </h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">
            <h5>RFC:{{$ts->rfc}} </h5>

            @if($arc->ife != 'null')
                <h5>IFE:
                    {{link_to('archivos/'.$arc->ife,'Descargar IFE',['target'=>'_blank','download'=> ''.$ts->id.'IFE'])}}</h5>
            @else
                <h5>IFE: Sin Archivo</h5>
            @endif

            @if($arc->comp_dom != 'null')
                <h5>Comprobante de Domicilio:
                    {{link_to('archivos/'.$arc->comp_dom,'Descargar Comprobante de Domicilio',['target'=>'_blank','download'=> ''.$ts->id.'DOMICILIO'])}}</h5>
            @else
                <h5>Comprobante de Domicilio:
                    Sin Comprobante</h5>
            @endif

            @if($arc->curp != 'null')
                <h5>CURP:
                    {{link_to('archivos/'.$arc->curp,'Descargar CURP',['target'=>'_blank','download'=> ''.$ts->id.'CURP'])}}</h5>
            @else
                <h5>CURP:
                    Sin CURP</h5>
            @endif
            @if($arc->renuncia != 'null')
                <h5>Renuncia:
                    {{link_to('archivos/'.$arc->renuncia,'Descargar Renuncia',['target'=>'_blank','download'=> ''.$ts->id.'Renuncia'])}}</h5>
            @else
                <h5>Renuncia:
                    Sin Comprobante</h5>
            @endif
            @if($arc->com_seguro != 'null')
                <h5>Numero de Seguro: {{$ts->num_seguro}}
                    {{link_to('archivos/'.$arc->com_seguro,'Descargar Comprobante de Seguro',['target'=>'_blank','download'=> ''.$ts->id.'Seguro'])}}</h5>
            @else
                <h5>Numero de Seguro:
                    Sin Comprobante</h5>
            @endif



        </div>
    </div>
@stop