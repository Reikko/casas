@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('contentTrab')
    <table class="table table-bordered table-hover">
        <thead>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Editar</th>
        </thead>
        <td>{!! Form::select('id_calle', $calles,null,['class'=>'form-control']) !!}
            <a href="#">
                <span class="glyphicon glyphicon-plus"></span>
            </a>Agregar calle</br>
            Todos igual {!!Form::checkbox('allCalles', 'value',false)!!}</td>
        <td>{!! Form::text('num_ext',null,['class'=>'form-control']) !!}
            Todos igual {!!Form::checkbox('allExt', 'value',false)!!}</td>
        <td>{!! Form::text('num_int',null,['class'=>'form-control']) !!}
            Todos igual {!!Form::checkbox('allInt', 'value',false)!!}</td>
        <td><button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-lock"></span> Block
            </button>
        </td>

        @foreach($unidades as $unidad)
            <tbody>
            <td>{!! Form::select('id_calle[]', $calles,$unidad->id_calle,['class'=>'form-control','id'=>$unidad->id]) !!}</td>
            <td>{!! Form::text('num_ext[]',$unidad->num_ext,['class'=>'form-control','id'=>$unidad->id]) !!}</td>
            <td>{!! Form::text('num_int[]',$unidad->num_int,['class'=>'form-control','id'=>$unidad->id]) !!}</td>
            <td>{{$unidad->editable}}</td>
            </tbody>
        @endforeach
    </table>
@stop