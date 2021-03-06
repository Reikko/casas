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
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
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
                <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
                    AZF
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                        <?php if(Auth::guest()): ?>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Desarrollo<span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                    <li class="dropdown-submenu">
                                        <?php echo link_to_route('cuadrilla.index', $title = 'Cuadrillas'); ?>

                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('cuadrilla.create', $title = 'Crear Cuadrilla'); ?></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <?php echo link_to_route('des.index', $title = 'Desarrollos'); ?>

                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('des.create', $title = 'Crear Desarrollo'); ?></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <?php echo link_to_route('cdad.index', $title = 'Ciudades'); ?>

                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('cdad.create', $title = 'Crear Ciudades'); ?></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <?php echo link_to_route('edo.index', $title = 'Estados'); ?>

                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('edo.create', $title = 'Agregar Estado'); ?></li>
                                        </ul>
                                    </li>
                                    <!--<li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Calles</a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('calle.index', $title = 'Mostrar Calle o Edificio'); ?></li>
                                            <li><?php echo link_to_route('calle.create', $title = 'Crear Calle o Edificio'); ?></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Lugares<span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                    <li class="dropdown-submenu">
                                    <?php echo link_to_route('lugar.index', $title = 'Lugares Casa'); ?>

                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('lugar.create', $title = 'Crear Lugares Casa'); ?></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <?php echo link_to_route('fallo.index', $title = 'Lugares Defecto'); ?>

                                        <ul class="dropdown-menu">
                                            <li><?php echo link_to_route('fallo.create', $title = 'Crear Lugar Defecto'); ?></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Usuarios<span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Clientes</a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo link_to_route('client.index', $title = 'Mostrar Clientes'); ?></li>
                                        <li><?php echo link_to_route('client.create', $title = 'Crear Cliente'); ?></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Trabajadores</a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo link_to_route('trabajador.index', $title = 'Mostrar Trabajadores'); ?></li>
                                        <li><?php echo link_to_route('trabajador.create', $title = 'Crear Trabajadores'); ?></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Inquilino</a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo link_to_route('inquilino.index', $title = 'Mostrar Inquilinos'); ?></li>
                                        <li><?php echo link_to_route('inquilino.create', $title = 'Crear Inquilino'); ?></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/">Propiedades<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo link_to('nuevas/select', $title = 'Nueva Propiedad'); ?></li>
                                    <li><?php echo link_to_route('nuevas.index', $title = 'Mostrar Propiedades'); ?></li>
                                </ul>
                            </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="/">Avance<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?php echo link_to('avance/create', $title = 'Crear Avance'); ?></li>
                                <li><?php echo link_to_route('avance.index', $title = 'Total Avances'); ?></li>
                                <li><?php echo link_to_route('lote.index', $title = 'Avance Lote'); ?></li>
                                <li><?php echo link_to_route('avanceCuadrilla.index', $title = 'Avance Cuadrilla'); ?></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Ingresar</a></li>
                        <!--<li><a href="<?php echo e(url('/register')); ?>">Registrar usuario</a></li>-->
                    <?php else: ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> Rol:<?php echo e(Auth::user()->rol); ?><span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            <?php if( Auth::user()->rol == 1): ?>
                                <li><a href="<?php echo e(url('user/create')); ?>">Registrar usuario</a>
                            <?php endif; ?>
                            </ul>
                        </li>

                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>

    <?php if(Auth::guest()): ?>
    <?php else: ?>
        <?php echo $__env->make('modal.edo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4" >
                </div>
                <div class="col-sm-4" >
                    <?php echo $__env->yieldContent('444'); ?>
                </div>
                <div class="col-sm-4" ></div>
            </div>
            <div class="row">
                <div class="col-sm-3" >
                </div>
                <div class="col-sm-6">
                    <?php echo $__env->yieldContent('363'); ?>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <?php echo $__env->yieldContent('completo'); ?>
        </div>
    </div>

    <?php echo $__env->yieldContent('login'); ?>
    <?php echo $__env->yieldContent('register'); ?>
    <?php echo $__env->yieldContent('welcome'); ?>

    <?php echo Html::script('/js/drop.js'); ?>

    <?php echo Html::script('/js/cambiaDefecto.js'); ?>

    <?php echo Html::script('/js/validaCampos.js'); ?>

    <?php echo Html::script('/js/selecciones.js'); ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
</body>
</html>
