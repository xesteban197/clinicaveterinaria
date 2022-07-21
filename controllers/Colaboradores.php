<?php

class ColaboradoresController
{

    public function __construct()
    {
        require_once "models/ColaboradoresModel.php";
    }

    public function index()
    {

        require_once "models/ColaboradoresModel.php";
        $colaboradores = new  Colaboradores_model();
        $data["titulo"] = "Colaboradores";
        $data["colaboradores"] = $colaboradores->get_colaboradores();

        require_once "views/colaborador/colaboladores.php";
    }

    public function nuevo()
    {
        $data["titulo"] = "Colaboradores";
        require_once "views/colaborador/colaboladores_nuevo.php";
    }

    public function guarda()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cargo = $_POST['cargo'];
        $especialidad = $_POST['especialidad'];
        $tipo = $_POST['tipo'];
        $documento = $_POST['documento'];

        $colaboladores = new Colaboradores_model();
        $colaboladores->insertar($nombre, $apellido, $cargo, $especialidad, $tipo, $documento);

        $data["titulo"] = "Colaboradores";
        $this->index();
    }

    public function modificar($id)
    {
        $colaboladores = new Colaboradores_model();

        $data["id"] = $id;
        $data["colaboladores"] = $colaboladores->get_colaborador($id);;
        $data["titulo"] = "Colaboradores";
        require_once "views/colaborador/colaboladores_modifica.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['raza'];
        $cargo = $_POST['dueno'];
        $especialidad = $_POST['sexo'];
        $tipo = $_POST['tipo'];
        $documento = $_POST['documento'];


        $colaboradores = new Colaboradores_model();
        $colaboradores->modificar($id, $nombre, $apellido, $cargo, $especialidad, $tipo, $documento);

        $data["titulo"] = "Colaboradores";
        $this->index();
    }

    public function eliminar($id)
    {

        $colaboladores = new Colaboradores_model();
        $colaboladores->eliminar($id);

        $data["titulo"] = "Colaboradores";
        $this->index();
    }
}
