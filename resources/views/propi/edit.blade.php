@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')

    @foreach ($propiedades as $propiedad)
        <div class="col-sm-4" style="background-color:lavender;">
            <div class="form-group">
                {!! Form::label('Calle:') !!}
                {!! Form::select('id_calle', $calles,null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                {!! Form::label('Numero exterior') !!}
                {!! Form::text('num_ext',null,['class'=>'form-control','value'=>$propiedad->num_ext]) !!}
            </div>
        </div>

        <div class="col-sm-4" style="background-color:lavender;">
            <div class="form-group">
                {!! Form::label('Numero exterior') !!}
                {!! Form::text('num_int',$propiedad->num_ext,['class'=>'form-control']) !!}
            </div>
        </div>
    @endforeach
@stop