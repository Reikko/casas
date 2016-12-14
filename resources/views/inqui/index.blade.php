@extends('layouts.app')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif

@section('completo')
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Ocupacion</th>
        <th>Estatus</th>
        <th>Usuario</th>
        <th>Documentos</th>
        <th>Editar</th>
        </thead>

        @foreach($inq as $t)
            <tbody>
            @if($t->estatus ==0)
                <tr class="success">
            @endif
            @if($t->estatus ==1)
                <tr class="info">
            @endif

            @if($t->estatus == 2)
                <tr class="warning">
            @endif

            @if($t->estatus == 3)
                <tr class="danger">
            @endif
                <td>{{$t->id}}</td>
                <td>
                    @if($t->foto == 'imagen.jpg')
                        {{ Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 100px']) }}
                    @else
                        {{ Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 100px']) }}
                    @endif
                    <br>
                    {{link_to_route('inquilino.show', $title = 'VER PERFIL', $t->id,['class'=>'btn btn-primary'])}}</td>
                <td>{{$t->nom_inquilino}} {{$t->ap_pat}} {{$t->ap_mat}}</td>
                <td>{{$t->ocupacion}}</td>
                <td>{{$t->estatus}}</td>
                <td>{{$t->alias}}</td>
                <td>
                    @if($t->ife != null)
                        <a href="archivos/{{$t->ife}}" target="_blank"> IFE</a><br>
                    @endif
                    @if($t->comp_dom != null)
                        <a href="archivos/{{$t->comp_dom}}" target="_blank"> DOMICILIO</a><br>
                    @endif
                    @if($t->contrato != null)
                        <a href="archivos/{{$t->contrato}}" target="_blank"> SEGURO</a><br>
                    @endif
                </td>
                <td>{!!link_to_route('inquilino.edit','Editar', $t->id, ['class'=>'btn btn-primary'])!!}</td>
            </tr>
            </tbody>
        @endforeach
    </table>
@stop