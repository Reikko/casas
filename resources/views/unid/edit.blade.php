@extends('layouts.app')
@section('completo')
    @include('modal.calle')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <table class="table table-bordered table-hover">

        <thead>
            <tr class="info">
                <th>id</th>
                <th>Nombre de la Calle</th>
                <th>Numero Exterior</th>
                <th>Numero Interior</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tr class="info">
            <td></td>
            <td>{!! Form::select('id_calle', $calles,1,['class'=>'form-control','id'=>'calle']) !!}
            {!! Form::button('Agregar Calle',[
            'class'=>'form-control btn btn-info btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modCalle',
            'data-backdrop'=>'static' ]) !!}
            Todos igual {!!Form::checkbox('allCalle', 'value',false,['onclick'=> 'seleccionarCalle()','id'=>'allCalle'])!!}</td>
            <td>{!! Form::text('all_Ext',null,['class'=>'form-control','id'=>'a_ext']) !!}
            Todos igual {!!Form::checkbox('allExt', 'value',false,['onclick'=> 'seleccionNumExt()','id'=>'allExt'])!!}</td>
            <td></td>
            <td>
            </td>
        </tr>
    {!! Form::model($unidades,['route'=>['unidad.update',$id],'method'=>'PUT','id'=>'formSelect']) !!}
        <!--Inicio del formulario-->
        @foreach($unidades as $key => $unidad)

            @if($unidad->editable == 1)
            <tr class="warning">
                <td>{{$key+1}}{!! Form::hidden('unidades[]',$unidad->id,['class'=>'form-control']) !!}</td>
                <td>{!! Form::select('id_calle[]', $calles,$unidad->id_calle,['class'=>'form-control' ]) !!}</td>
                <td>{!! Form::text('num_ext[]',$unidad->num_ext,['class'=>'form-control']) !!}</td>
                <td>{!! Form::text('num_int[]',$unidad->num_int,['class'=>'form-control']) !!}</td>
                <td>{{link_to_action('UnidadControl@bloquear', 'Bloquear',$unidad->id, ['class'=>'form-control btn btn-warning btn-md'])}}</td>
            </tr>
            @else
            <tr class="danger">
                <td>{{$key+1}}</td>
                <td>{!! Form::select('id_calle_not', $calles,$unidad->id_calle,['class'=>'form-control','disabled' ]) !!}</td>
                <td>{{$unidad->num_ext}}</td>
                <td>{{$unidad->num_int}}</td>
                <td>Bloqueada</td>
            </tr>
            @endif

        @endforeach

    </table>
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop