<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
             top: 0;
             left: 100%;
             margin-top: -6px;
             margin-left: -1px;
             -webkit-border-radius: 0 6px 6px 6px;
             -moz-border-radius: 0 6px 6px;
             border-radius: 0 6px 6px 6px;
         }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}">
                    AZF
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                        @if (Auth::guest())
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Desarrollo<span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Desarrollos</a>
                                        <ul class="dropdown-menu">
                                            <li>{!!link_to_route('des.index', $title = 'Mostrar Desarrollo')!!}</li>
                                            <li>{!!link_to_route('des.create', $title = 'Crear Desarrollo')!!}</li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Ciudades</a>
                                        <ul class="dropdown-menu">
                                            <li>{!!link_to_route('cdad.index', $title = 'Mostrar Ciudades')!!}</li>
                                            <li>{!!link_to_route('cdad.create', $title = 'Crear Ciudades')!!}</li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Estados</a>
                                        <ul class="dropdown-menu">
                                            <li>{!!link_to_route('edo.index', $title = 'Mostrar Estados')!!}</li>
                                            <li>{!!link_to_route('edo.create', $title = 'Agregar Estado')!!}</li>
                                        </ul>
                                    </li>
                                    <!--<li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Calles</a>
                                        <ul class="dropdown-menu">
                                            <li>{!!link_to_route('calle.index', $title = 'Mostrar Calle o Edificio')!!}</li>
                                            <li>{!!link_to_route('calle.create', $title = 'Crear Calle o Edificio')!!}</li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Clientes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>{!!link_to_route('client.index', $title = 'Mostrar Clientes')!!}</li>
                                    <li>{!!link_to_route('client.create', $title = 'Crear Cliente')!!}</li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Trabajadores<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>{!!link_to_route('trabajador.index', $title = 'Mostrar Trabajadores')!!}</li>
                                    <li>{!!link_to_route('trabajador.create', $title = 'Crear Trabajadores')!!}</li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Inquilino<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>{!!link_to_route('inquilino.index', $title = 'Mostrar Inquilinos')!!}</li>
                                    <li>{!!link_to_route('inquilino.create', $title = 'Crear Inquilino')!!}</li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Propiedades<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>{!!link_to('nuevas/select', $title = 'Nueva Propiedad')!!}</li>
                                    <li>{!!link_to_route('nuevas.index', $title = 'Mostrar Propiedades')!!}</li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Lugares Casa<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>{!!link_to_route('lugar.create', $title = 'Nuevo Lugar Casa')!!}</li>
                                    <li>{!!link_to_route('lugar.index', $title = 'Mostrar Lugares Casa')!!}</li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Lugares Defecto<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>{!!link_to_route('fallo.create', $title = 'Nuevo Lugar Defecto')!!}</li>
                                    <li>{!!link_to_route('fallo.index', $title = 'Mostrar Lugares Defecto')!!}</li>
                                </ul>
                            </li>
                        @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        <!--<li><a href="{{ url('/register') }}">Registrar usuario</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} Rol:{{Auth::user()->rol}}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>

                    @endif

                </ul>
            </div>
        </div>
    </nav>

    @if (Auth::guest())
    @else
        @include('modal.edo')
        <div class="container">
            <div class="row">
                <div class="col-sm-4" >
                </div>
                <div class="col-sm-4" >
                    @yield('444')
                </div>
                <div class="col-sm-4" ></div>
            </div>
            <div class="row">
                <div class="col-sm-3" >
                </div>
                <div class="col-sm-6">
                    @yield('363')
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row">
            @yield('completo')
        </div>
    </div>

    @yield('login')
    @yield('register')
    @yield('welcome')

    {!!Html::script('/js/drop.js')!!}
    {!!Html::script('/js/cambiaDefecto.js')!!}
    {!!Html::script('/js/validaCampos.js')!!}
    {!!Html::script('/js/selecciones.js')!!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
