<?php

class DetallesController
{

    public function __construct()
    {
        require_once "models/DetallesModel.php";
    }

    public function index()
    {

        require_once "models/DetallesModel.php";
        $detalles = new  Detalles_model();
        $data["titulo"] = "Detalles";
        $data["detalles"] = $detalles->get_detalles();

        require_once "views/detalle/detalles.php";
    }

    public function nuevo()
    {
        $data["titulo"] = "Detalles";
        require_once "views/detalle/detalles_nuevo.php";
    }

    public function guarda()
    {
        $temperatura = $_POST['temperatura'];
        $peso = $_POST['peso'];
        $cardiaca = $_POST['cardiaca'];
        $respiratoria = $_POST['respiratoria'];
        $fecha = $_POST['fecha'];
        $alimentacion = $_POST['alimentacion'];
        $habitad = $_POST['habitad'];
        $observacion = $_POST['observacion'];
        $colaborador = $_POST['colaborador'];
        $historia = $_POST['historia'];


        $detalles = new Detalles_model();
        $detalles->insertar($temperatura, $peso, $cardiaca, $respiratoria, $fecha, $alimentacion, $habitad, $observacion, $colaborador, $historia);

        $data["titulo"] = "Detalles";
        $this->index();
    }

    public function modificar($id)
    {
        $detalles = new Detalles_model();

        $data["id"] = $id;
        $data["detalles"] = $detalles->get_detalle($id);;
        $data["titulo"] = "Detalles";
        require_once "views/detalle/detalles_modifica.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $temperatura = $_POST['temperatura'];
        $peso = $_POST['peso'];
        $cardiaca = $_POST['cardiaca'];
        $respiratoria = $_POST['respiratoria'];
        $fecha = $_POST['fecha'];
        $alimentacion = $_POST['alimentacion'];
        $habitad = $_POST['habitad'];
        $observacion = $_POST['observacion'];
        $colaborador = $_POST['colaborador'];
        $historia = $_POST['historia'];

        $detalles = new Detalles_model();
        $detalles->modificar($id, $temperatura, $peso, $cardiaca, $respiratoria, $fecha, $alimentacion, $habitad, $observacion, $colaborador, $historia);

        $data["titulo"] = "Detalles";
        $this->index();
    }

    public function eliminar($id)
    {

        $detalles = new Detalles_model();
        $detalles->eliminar($id);

        $data["titulo"] = "Detalles";
        $this->index();
    }
}
