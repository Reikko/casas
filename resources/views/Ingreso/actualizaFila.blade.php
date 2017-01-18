@extends('layouts.app')
@section('completo')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>{{$lote->nombre}}
                    {{link_to('avance/'.$id,'Ver', ['class'=>'btn btn-primary'])}}
                </h1>
                <h5>Destajista: {{$empleado->nombre}}</h5>
                <h5>Folio N° : {{$avance->id}}</h5>
                <h5>Fecha inicial: {{\Carbon\Carbon::parse($avance->f_ini)->format(' d-m-Y')}}</h5>
                <h5>Fecha final: {{\Carbon\Carbon::parse($avance->f_fin)->format(' d-m-Y')}}</h5>
            </div>
            <div class="panel-body">

                <div class="col-sm-3"></div>
                <div class="col-sm-6">{{$destajos->render()}}</div>
                <div class="col-sm-3">
                </div>
                <table class="table table-condensed table-bordered table-hover ">
                    <thead>
                    <tr>
                        <th>DESCRIPCION</th>
                        <th>%AVANCE ANTERIOR</th>
                        <th>%ESTE AVANCE</th>
                        <th>$PAGO POR AVANCE</th>
                        <th>% MODIFICAR AVANCE</th>
                        <th>%AVANCE TOTAL</th>
                    </tr>
                    </thead>
                    {!! Form::open(['url'=>'ingreso/valor','method'=>'POST','id'=>'form_enviar']) !!}
                    {{ Form::hidden('lote',$lote->id) }}
                    {{ Form::hidden('id_avance',$id) }}

                    @foreach($destajos as $i=> $destajo)
                        <tr data-id="{{$destajo->id}}">
                            @if ($errors->has('porcentaje.'.$i))
                                {!! Form::hidden('id_destajo['.$i.']', old('id_destajo.'.$i)) !!}
                            @else
                                {!! Form::hidden('id_destajo['.$i.']', $destajo->id) !!}
                            @endif
                            <td>
                                {{$destajo->descripcion}}
                            </td>
                            <?php $ya = 1; ?>
                            @foreach($av_ant as $fila)
                                @if($fila->id_destajo == $destajo->id)
                                    <td class="warning">
                                        {{$fila->avance}} %
                                        <?php $ya = 0; ?>
                                    </td>
                                    @break
                                @endif
                            @endforeach
                            @if($ya == 1)
                                <td>0 %</td>
                            @endif

                            <?php $ya = 1; ?>
                            @foreach($filasLote as $fl)
                                @if($fl->id_destajo == $destajo->id && $fl->avance>0)
                                    <td class="info">
                                        {{  $fl->avance }} %
                                    </td>
                                    <?php $ya = 0; ?> @break
                                @endif
                            @endforeach
                            @if($ya == 1)
                                <td>0 %</td>
                            @endif

                            @if ($errors->has('pago.'.$i))
                                <td>
                                    {{ old('pago.'.$i)  }}
                                </td>
                            @else
                                <?php $ya = 1; ?>
                                @foreach($filasLote as $fl)
                                    @if($fl->id_destajo == $destajo->id)
                                        <td >
                                            <div id="{{"pago".$destajo->id}}">
                                                {{ ($fl->avance/100)*(($destajo->destajo/100)*$destajo->total)  }}
                                            </div>
                                        </td>
                                        <?php $ya = 0; ?> @break
                                    @endif
                                @endforeach
                                @if($ya == 1)
                                    <td>
                                        <div id="{{"pago".$destajo->id}}">
                                            0
                                        </div>
                                    </td>
                                @endif
                            @endif

                            @if ($errors->has('porcentaje.'.$i))
                                <td>
                                    <div class="form-group{{ 'porcentaje.'.$i ? ' has-error' : '' }}">
                                        {{ Form::text('porcentaje['.$i.']',old('porcentaje.'.$i),['class'=>'form-control']) }}
                                        <span class="help-block">
                                        <strong>{{ $errors->first('porcentaje.'.$i) }}</strong>
                                    </span>
                                    </div>
                                </td>
                            @else
                                <?php $ya = 1; ?>
                                @foreach($filasLote as $fl)
                                    @if($fl->id_destajo == $destajo->id)
                                        <td>
                                            {{ Form::text('porcentaje['.$i.']', $fl->avance ,['class'=>'form-control']) }}
                                            <strong id="{{"error".$i}}"></strong>
                                        </td>
                                        <?php $ya = 0; ?> @break
                                    @endif
                                @endforeach
                                @if($ya == 1)
                                    <td>
                                        {{ Form::text('porcentaje['.$i.']', 0 ,['class'=>'form-control']) }}
                                        <strong id="{{"error".$i}}"></strong>
                                    </td>
                                @endif
                            @endif

                            @foreach($av_total as $avt)
                                @if($avt->id_destajo == $destajo->id)
                                    <td class="success">
                                        {{$avt->avance}} %
                                        <?php $ya = 0; ?>
                                    </td>
                                    @break
                                @endif
                            @endforeach
                            @if($ya == 1)
                                <td >0 %</td>
                            @endif

                        </tr>

                    @endforeach
                    {!! Form::close() !!}
                </table>


            </div>
        </div>
    </div>

    {!!Html::script('/js/calculaPago.js')!!}
@stop