@extends('layouts.app')
@section('363')
    @if($id != 1)
        <h2>Creando Varias</h2>
        @for($i=0;$i<$id;$i++)
            <h3>{{$id}}</h3>
            @endfor

        @else
        <table class="table table-bordered table-hover">

            <thead>
            <th>id</th>
            <th>tipo</th>
            <th>Numero Exterior</th>
            <th>Numero Interior</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
            <td></td>
            <td>
                {!! Form::select('tipo', $tipos,1,['class'=>'form-control']) !!}
                {!! Form::button('Agregar tipo',[
                    'class'=>'form-control btn btn-default btn-md',
                    'data-toggle'=>'modal',
                    'data-target'=>'#modCalle',
                    'data-backdrop'=>'static' ]) !!}
                    Todos igual {!!Form::checkbox('allCalle', 'value',false)
                !!}
            </td>
            <td>
                {!! Form::text('all_Ext',null,['class'=>'form-control']) !!}
                Todos igual
                {!!Form::checkbox('allExt', 'value',false)!!}
            </td>
            <td></td>
            <td><button type="button" class="btn btn-info btn-block">
                    <span class="glyphicon glyphicon-lock"></span> Block
                </button>
            </td>
            <td><button type="button" class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-lock"></span> Eliminar
                </button>
            </td>
        {!! Form::model($id,['route'=>['unidad.update',$id],'method'=>'PUT']) !!}
        <!--Inicio del formulario-->
            @for($i=0;$i<$id;$i++)
                <tbody>
                <td>{{$i+1}}{!! Form::hidden('unidades[]',null,['class'=>'form-control']) !!}</td>
                <td>{!! Form::select('id_calle[]', ['1'=>'Seleccione una Calle'],1,['class'=>'form-control' ]) !!}</td>
                <td>{!! Form::text('num_ext[]','0',['class'=>'form-control']) !!}</td>
                <td>{!! Form::text('num_int[]','0',['class'=>'form-control']) !!}</td>
                <td></td>
                </tbody>
            @endfor


        </table>
        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        @endif
@endsection