<!-- Modal -->
<div class="container">
    <div class="modal fade" id="modServicio" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Agregando Servicio</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'tipo.store','method'=>'POST']) !!}
                    {{ Form::hidden('cuota',$id) }}
                    <div class="form-group">
                        {!! Form::label('Servicio:') !!}
                        {!! Form::text('nom_cuota',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del servicio','required'=>'true']) !!}
                    </div>
                    {!! Form::submit('Registrar',['class'=>'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>