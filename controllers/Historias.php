<?php

class HistoriasController
{

    public function __construct()
    {
        require_once "models/HistoriasModel.php";
    }

    public function index()
    {

        require_once "models/HistoriasModel.php";
        $historias = new  Historias_model();
        $data["titulo"] = "Historias";
        $data["historias"] = $historias->get_historias();

        require_once "views/historia/historias.php";
    }

    public function nuevo()
    {
        $data["titulo"] = "Historias";
        require_once "views/historia/historias_nuevo.php";
    }

    public function guarda()
    {
        $mascota = $_POST['mascota'];
        $fecha = $_POST['fecha'];

        $historias = new Historias_model();
        $historias->insertar($mascota, $fecha);

        $data["titulo"] = "Historias";
        $this->index();
    }

    public function modificar($id)
    {
        $historias = new Historias_model();

        $data["id"] = $id;
        $data["historias"] = $historias->get_historia($id);;
        $data["titulo"] = "Historias";
        require_once "views/historia/historias_modifica.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $mascota = $_POST['mascota'];
        $fecha = $_POST['fecha'];


        $historias = new Historias_model();
        $historias->modificar($id, $mascota, $fecha);

        $data["titulo"] = "Historias";
        $this->index();
    }

    public function eliminar($id)
    {

        $historias = new Historias_model();
        $historias->eliminar($id);

        $data["titulo"] = "Historias";
        $this->index();
    }
}
