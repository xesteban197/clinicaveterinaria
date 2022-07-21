<?php

class MascotasController
{

    public function __construct()
    {
        require_once "models/MascotasModel.php";
    }

    public function index()
    {

        require_once "models/MascotasModel.php";
        $mascotas = new  Mascotas_model();
        $data["titulo"] = "Mascotas";
        $data["mascotas"] = $mascotas->get_mascotas();

        require_once "views/mascota/mascotas.php";
    }

    public function nuevo()
    {
        $data["titulo"] = "Mascotas";
        require_once "views/mascota/mascotas_nuevo.php";
    }

    public function guarda()
    {
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];
        $dueno = $_POST['dueno'];
        $sexo = $_POST['sexo'];

        $mascotas = new Mascotas_model();
        $mascotas->insertar($nombre, $raza, $dueno, $sexo);

        $data["titulo"] = "Mascotas";
        $this->index();
    }

    public function modificar($id)
    {
        $mascotas = new Mascotas_model();

        $data["id"] = $id;
        $data["mascotas"] = $mascotas->get_mascota($id);;
        $data["titulo"] = "Mascotas";
        require_once "views/mascota/mascotas_modifica.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];
        $dueno = $_POST['dueno'];
        $sexo = $_POST['sexo'];

        $mascotas = new Mascotas_model();
        $mascotas->modificar($id, $nombre, $raza, $dueno, $sexo);

        $data["titulo"] = "Mascotas";
        $this->index();
    }

    public function eliminar($id)
    {

        $mascotas = new Mascotas_model();
        $mascotas->eliminar($id);

        $data["titulo"] = "Mascotas";
        $this->index();
    }
}
