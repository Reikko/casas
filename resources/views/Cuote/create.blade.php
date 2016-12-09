@extends('layouts.app')
@section('completo')
    <table class="table">
        <thead>
        <th>Fecha de inicio</th>
        <th>Servicio</th>
        <th>Periodo</th>
        <th>Monto</th>
        <th>Descripción</th>
        <th>Pueden ver</th>
        <th>Opción</th>
        </thead>
        {!! Form::open(['route'=>'cuota.store','method'=>'POST']) !!}
        {{ Form::hidden('id_prop', $id, array('id' => 'invisible_id')) }}
        <td>
            <input type="date" name="fecha_ini" class="form-control col-sm-9" required ="true" value={{$date->toDateString()}}>
        </td>
        <td> {!! Form::select('tipo_cuota',$cuotas,null,['class'=>'form-control']) !!}
            {!! Form::button('Agregar Servicio',[
                'class'=>'form-control btn btn-info btn-md',
                'data-toggle'=>'modal',
                'data-target'=>'#modEstado',
                'data-backdrop'=>'static' ]) !!}
        </td>
        <td>
            {!! Form::select('tipo_periodo',$periodos,null,['class'=>'form-control']) !!}
            {!! Form::button('Agregar Periodo',[
                'class'=>'form-control btn btn-info btn-md',
                'data-toggle'=>'modal',
                'data-target'=>'#modCiudad',
                'data-backdrop'=>'static' ]) !!}
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

    <!--</table>
    <table class="table table-bordered">
        <thead>
        <th>Fecha de inicio</th>
        <th>Servicio</th>
        <th>Periodo</th>
        <th>Monto</th>
        <th>Descripción</th>
        <th>Puede ver</th>
        <th>Opción</th>
        </thead>-->
        @foreach($regCuotas as $c)
            <tbody>
            <td>{{Carbon\Carbon::parse($c->created_at)->format('d-m-Y')}}</td>
            <td>{{$c->nom_cuota}}</td>
            <td>{{$c->nom_periodo}}</td>
            <td>
                ${{$c->monto}}
            </td>
            <td>
                {{$c->descripcion}}
            </td>
            <td>
                {{$c->ver}}
            </td>
            <td>
                {!!link_to_route('cdad.show', $title = 'Modificar', $parameters = $c->id, $attributes = ['class'=>'btn btn-info btn-block'])!!}
                {!! Form::open(['route'=>['cuota.destroy',$c->id],'method'=>'DELETE']) !!}
                {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </td>
            </tbody>


        @endforeach
    </table>

@endsection