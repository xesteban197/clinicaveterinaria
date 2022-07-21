<?php

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $data["titulo"]; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">


            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">

                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-folder"></i>&nbsp;&nbsp;Historias Clinicas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="index.php?c=historias"><i class="zmdi zmdi-file"></i>&nbsp;&nbsp; Todas</a></li>
                            <li><a href="index.php?c=historias&a=nuevo"><i class="zmdi zmdi-file-plus"></i>&nbsp;&nbsp; Agregar</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts"></i>&nbsp;&nbsp; Usuarios<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="index.php?c=usuarios"><i class="zmdi zmdi-account"></i>&nbsp;&nbsp; Todos</a></li>
                            <li><a href="index.php?c=usuarios&a=nuevo"><i class="zmdi zmdi-account-add"></i>&nbsp;&nbsp; Agregar</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-github-alt"></i>&nbsp;&nbsp; Mascotas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="index.php?c=mascotas"><i class="zmdi zmdi-twitter"></i>&nbsp;&nbsp; Todas</a></li>
                            <li><a href="index.php?c=mascotas&a=nuevo"><i class="zmdi zmdi-plus-circle"></i>&nbsp;&nbsp; Agregar</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts"></i>&nbsp;&nbsp; Colaboradores<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="index.php?c=colaboradores"><i class="zmdi zmdi-account"></i>&nbsp;&nbsp; Todos</a></li>
                            <li><a href="index.php?c=colaboradores&a=nuevo"><i class="zmdi zmdi-account-add"></i>&nbsp;&nbsp; Agregar</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-view-dashboard"></i>&nbsp;&nbsp; Detalles<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="index.php?c=detalles"><i class="zmdi zmdi-view-list-alt"></i>&nbsp;&nbsp; Todos</a></li>
                            <li><a href="index.php?c=detalles&a=nuevo"><i class="zmdi zmdi-widgets"></i>&nbsp;&nbsp; Agregar</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo colaborador <?php echo $data['id']; ?></div>
                <form class="form-horizontal" method="POST" action="index.php?c=colaboradores&a=guarda" autocomplete="off">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>" />
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" required="" maxlength="5">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>nombre</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="apellido" required="" maxlength="200">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>apellido</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="cargo" required="" maxlength="200">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>cargo</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="especialidad" required="" maxlength="200">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>especialidad</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="tipo" required="" maxlength="200">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>tipo de documento </label>
                            </div>
                            <div class="group-material">
                                <input type="number" class="material-control tooltips-general" name="documento" required="" maxlength="200">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>documento de identificacion</label>
                            </div>

                        </div>
                    </div>
                    <p class="text-center">
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                    </p>
            </div>
            </form>
        </div>
    </div>
    </div>

</body>


</html>