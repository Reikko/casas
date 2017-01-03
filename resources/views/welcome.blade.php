@extends('layouts.app')

@section('welcome')
<div class="container">
    <div class="row">
        @if (Auth::guest())
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenido</div>

                    <div class="panel-body">
                        Inicia Sesión para continuar...
                    </div>
                </div>
            </div>
        @else
        @endif
    </div>
</div>
@endsection
