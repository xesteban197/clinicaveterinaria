<?php

class UsuariosController
{

    public function __construct()
    {
        require_once "models/UsuariosModel.php";
    }

    public function index()
    {

        require_once "models/UsuariosModel.php";
        $usuarios = new  Usuarios_model();
        $data["titulo"] = "Usuarios";
        $data["usuarios"] = $usuarios->get_usuarios();

        require_once "views/usuario/usuarios.php";
    }

    public function nuevo()
    {
        $data["titulo"] = "Usuarios";
        require_once "views/usuario/usuarios_nuevo.php";
    }

    public function guarda()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipo = $_POST['tipo'];
        $documento = $_POST['documento'];
        $estado = $_POST['estado'];
        $sexo = $_POST['sexo'];


        $usuarios = new Usuarios_model();
        $usuarios->insertar($nombre, $apellido, $tipo, $documento, $estado, $sexo);

        $data["titulo"] = "Usuarios";
        $this->index();
    }

    public function modificar($id)
    {
        $usuarios = new Usuarios_model();

        $data["id"] = $id;
        $data["usuarios"] = $usuarios->get_usuario($id);;
        $data["titulo"] = "Usuarios";
        require_once "views/usuario/usuarios_modifica.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipo = $_POST['tipo'];
        $documento = $_POST['documento'];
        $estado = $_POST['estado'];
        $sexo = $_POST['sexo'];

        $usuarios = new Usuarios_model();
        $usuarios->modificar($id, $nombre, $apellido, $tipo, $documento, $estado, $sexo);

        $data["titulo"] = "Usuarios";
        $this->index();
    }

    public function eliminar($id)
    {

        $usuarios = new Usuarios_model();
        $usuarios->eliminar($id);

        $data["titulo"] = "Usuarios";
        $this->index();
    }
}
