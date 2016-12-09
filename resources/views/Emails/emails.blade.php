

@if($cuota->tipo_cuota == 1)                            <!--La Cuota Fue Diaria-->
    <h1>Fecha de inicio {{$cuota->fecha_ini}}</h1>

    <h1>Se añadio una cuota de {{$tipo->nom_cuota}} por concepto de ${{$cuota->monto }}</h1>
    <h1>Pagala antes del {{$cuota->created_at->format('d-m-Y')}}</h1>

    <h3>Descripción: {{$cuota->descripcion}}</h3>
    @endif
