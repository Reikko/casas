@extends('layouts.app')
@section('completo')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-9">

        </div>
        <div class="col-sm-3">
            {{link_to('nuevas/'.$id, $title = 'Regresar',['class'=>' btn btn-success btn-block'])}}
        </div>

        <br>
        <br>
        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">Todos los Inquilinos</div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed">
                        <thead>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Agregar</th>
                        </thead>

                        @foreach($inq as $t)
                            <tr class="info">
                                <td>{{$t->id}}</td>
                                <td>
                                    @if($t->foto == 'imagen.jpg')
                                        {{ Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 70px']) }}
                                    @else
                                        {{ Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 70px']) }}
                                    @endif
                                    <br>
                                    {{link_to_route('inquilino.show', $title = 'Ver', $t->id,['class'=>'btn btn-primary btn-block'])}}</td>
                                <td>{{$t->nom_inquilino}} {{$t->ap_pat}} {{$t->ap_mat}}</td>
                                <td>
                                    @if($t->tipo == 1)
                                        Inquilino
                                    @else
                                        Dueño
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['route'=>'relacion.store','method'=>'POST']) !!}
                                    {{ Form::hidden('id_reg_house', $id) }}
                                    {{ Form::hidden('id_prop', $t->id) }}
                                    {!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="panel panel-success">
                <div class="panel-heading">Inquilinos Agregados</div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed">
                        <thead>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Eliminar</th>
                        </thead>

                        @foreach($ocupantes as $t)
                            <tr class="success">
                                <td>{{$t->id_prop}}</td>
                                <td>
                                    @if($t->foto == 'imagen.jpg')
                                        {{ Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 70px']) }}
                                    @else
                                        {{ Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 70px']) }}
                                    @endif
                                    <br>
                                    {{link_to_route('inquilino.show', $title = 'Ver', $t->id_prop,['class'=>'btn btn-primary btn-block'])}}</td>
                                <td>{{$t->nom_inquilino}} {{$t->ap_pat}} {{$t->ap_mat}}</td>
                                <td>
                                    @if($t->tipo == 1)
                                        Inquilino
                                    @else
                                        Dueño
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['route'=>['relacion.destroy',$t->id],'method'=>'DELETE']) !!}
                                    {!! Form::submit('Quitar',['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop