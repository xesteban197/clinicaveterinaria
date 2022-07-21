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
    <br />
    <br />
    <div class="content-page-container full-reset custom-scroll-containers">
        <div class="text-center all-tittles">
            <div class="col-lg-13">
                <h2 class="text-center all-tittles"> listado de detalles</h2>
                <table border=3 style="background-color:#DFF0D8; font-weight:bold;">
                    <thead>
                        <tr>
                            <th style="width: 25%;">id</th>
                            <th style="width: 25%;">temperatura</th>
                            <th style="width: 25%;">peso</th>
                            <th style="width: 25%;">frecuencia cardiaca</th>
                            <th style="width: 25%;">frecuencia respiratoria</th>
                            <th style="width: 25%;">fecha y hora</th>
                            <th style="width: 25%;">alimentacion</th>
                            <th style="width: 25%;">habitad</th>
                            <th style="width: 25%;">observacion</th>
                            <th style="width: 25%;">colaborador</th>
                            <th style="width: 25%;">historia clinica</th>
                            <th style="width: 25%;">modificar</th>
                            <th style="width: 25%;">eliminar</th>

                        </tr>

                    </thead>

                    <tbody>
                        <?php
                        foreach ($data["detalles"] as $dato) {
                            echo "<tr>";
                            echo "<td>" . $dato["id"] . "</td>";
                            echo "<td>" . $dato["temperatura"] . "</td>";
                            echo "<td>" . $dato["peso"] . "</td>";
                            echo "<td>" . $dato["frecuencia_cardiaca"] . "</td>";
                            echo "<td>" . $dato["frecuencia_respiratoria"] . "</td>";
                            echo "<td>" . $dato["fecha_hora"] . "</td>";
                            echo "<td>" . $dato["alimentacion"] . "</td>";
                            echo "<td>" . $dato["habitad"] . "</td>";
                            echo "<td>" . $dato["observacion"] . "</td>";
                            echo "<td>" . $dato["colaborador_id"] . "</td>";
                            echo "<td>" . $dato["historiaclinica_id"] . "</td>";
                            echo "<td><a href='index.php?c=detalles&a=modificar&id=" . $dato["id"] . "'>Modificar</a></td>";
                            echo "<td><a href='index.php?c=detalles&a=eliminar&id=" . $dato["id"] . "'>Eliminar</a></td>";


                            echo "<tr>";
                        }
                        ?>
                    </tbody>
                </table>


                <br></br>
            </div>
        </div>

</body>


</html>