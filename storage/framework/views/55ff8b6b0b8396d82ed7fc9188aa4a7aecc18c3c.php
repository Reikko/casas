
    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AZF</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Estado<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('edo.index', $title = 'Mostrar Estados'); ?></li>
                            <li><?php echo link_to_route('edo.create', $title = 'Agregar Estado'); ?></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Ciudades<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('cdad.index', $title = 'Mostrar Ciudades'); ?></li>
                            <li><?php echo link_to_route('cdad.create', $title = 'Crear Ciudades'); ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Desarrollo<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('des.index', $title = 'Mostrar Desarrollo'); ?></li>
                            <li><?php echo link_to_route('des.create', $title = 'Crear Desarrollo'); ?></li>
                        </ul>
                    </li>
                <!--<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Calle/Edificio<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('calle.index', $title = 'Mostrar Calle o Edificio'); ?></li>
                            <li><?php echo link_to_route('calle.create', $title = 'Crear Calle o Edificio'); ?></li>
                        </ul>
                    </li>-->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('client.index', $title = 'Mostrar Clientes'); ?></li>
                            <li><?php echo link_to_route('client.create', $title = 'Crear Cliente'); ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Trabajadores<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('trabajador.index', $title = 'Mostrar Trabajadores'); ?></li>
                            <li><?php echo link_to_route('trabajador.create', $title = 'Crear Trabajadores'); ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Inquilino<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to_route('inquilino.index', $title = 'Mostrar Inquilinos'); ?></li>
                            <li><?php echo link_to_route('inquilino.create', $title = 'Crear Inquilino'); ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Admin Propiedad<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?php echo link_to('nuevas/select', $title = 'Nueva Propiedad'); ?></li>
                            <li><?php echo link_to_route('trabajador.create', $title = 'Crear Trabajadores'); ?></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-pills navbar-nav navbar-right">
                    <!--<li class = "active"><a data-toggle="pill" href="#inicio">Inicio</a></li>
                    <li ><a data-toggle="pill" href="#entrar"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div class="tab-content">
        <div id="entrar" class="tab-pane fade ">
            <div class="container-fluid">
                <div class="col-sm-3" style="background-color:lavender;">
                </div>
                <div class="col-sm-6">


                </div>

                <div class="col-sm-3" style="background-color:lavender;">
                </div>
            </div>
        </div>


        <div id="ver2" class="tab-pane fade">

        </div>

    </div>


    <!--<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>-->
