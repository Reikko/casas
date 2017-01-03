@extends('layouts.app')
@section('completo')
    @if($errors->has())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    @include('modal.servicio')
    <table class="table table-bordered">
        <thead>
        <th>Fecha de inicio <br>DD/MM/AAAA</th>
        <th>Tipo de Servicio</th>
        <th>Periodo</th>
        <th>Monto</th>
        <th>Descripción</th>
        <th>Pueden ver</th>
        <th>Opción</th>
        </thead>
        <tr class="success">
            {!! Form::open(['route'=>'cuota.store','method'=>'POST']) !!}
            {{ Form::hidden('id_prop', $id, array('id' => 'invisible_id')) }}
            <td>
                <input type="date" name="fecha_ini" class="form-control col-sm-9" required ="true" value={{$date->toDateString()}}>
            </td>
            <td> {!! Form::select('tipo_cuota',$cuotas,null,['class'=>'form-control']) !!}
                {!! Form::button('Agregar Servicio',[
                                    'class'=>'form-control btn btn-info btn-md',
                                    'data-toggle'=>'modal',
                                    'data-target'=>'#modServicio',
                                    'data-backdrop'=>'static' ])
                !!}
            </td>
            <td>
                {!! Form::select('tipo_periodo',$periodos,null,['class'=>'form-control']) !!}
            </td>
            <td>
                {!! Form::text('monto',null,['class'=>'form-control','placeholder'=>'Monto/Cantidad' ,'required'=>'true']) !!}
            </td>
            <td rowspan="2">
                {!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Escribe un comentario', 'rows'=> '3','cols'=> '20']) !!}
            </td>
            <td>
                {!! Form::radio('ver', '1') !!} Dueño <br>
                {!! Form::radio('ver', '2') !!} Inquilino<br>
                {!! Form::radio('ver', 3, true, ['class' => 'field']) !!} Todos
            </td>
            <td>{!! Form::submit('Agregar Cuota',['class'=>'btn btn-success btn-block']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        <tbody>
        @foreach($regCuotas as $c)
            <tr>
                <td>{{Carbon\Carbon::parse($c->fecha_ini)->format('d-m-Y')}}</td>
                <td>{{$c->nom_cuota}}</td>
                <td>{{$c->nom_periodo}}</td>
                <td>${{$c->monto}}</td>
                <td>{{$c->descripcion}}</td>
                <td>{{$c->ver}}</td>
                <td>
                    {!!link_to_route('cuota.show', $title = 'Editar', $parameters = $c->id, $attributes = ['class'=>'btn btn-warning btn-block'])!!}
                </td>
            </tr>
        @endforeach
            </tbody>
    </table>

@endsection