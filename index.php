<?php

require_once "config/config.php";
require_once "core/routes.php";
require_once "config/database.php";
require_once "controllers/Mascotas.php";
require_once "controllers/Historias.php";
require_once "controllers/Usuarios.php";
require_once "controllers/Colaboradores.php";
require_once "controllers/Detalles.php";

if (isset($_GET['c'])) {
    $controlador = cargarControlador($_GET['c']);
    if (isset($_GET['a'])) {
        if (isset($_GET['id'])) {
            cargarAccion($controlador, $_GET['a'], $_GET['id']);
        } else {
            cargarAccion($controlador, $_GET['a']);
        }
    } else {
        cargarAccion($controlador, ACCION_PRIINCIPAL);
    }
} else {
    $controlador = cargarControlador(CONTROLADOR_PRIINCIPAL);
    $accionTMP = ACCION_PRIINCIPAL;
    $controlador->$accionTMP();
}
