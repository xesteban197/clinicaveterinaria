<?php

class Usuarios_model
{


    private $usuarios;
    private $db;

    public function __construct()
    {
        $this->db = conectar::conexion();
        $this->usuarios = array();
    }

    public function get_usuarios()
    {
        $sql = "SELECT * FROM TB_USUARIO";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->usuarios[] = $row;
        }

        return $this->usuarios;
    }

    public function insertar($nombre, $apellido, $tipo, $documento, $estado, $sexo)
    {
        $sql = "INSERT INTO public.tb_usuario(nombre, apellido, tipo_documento, documento_identificacion, estado, sexo)
            VALUES ('$nombre', '$apellido', '$tipo', $documento,'$estado',$sexo);";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->usuarios[] = $row;
        }

        return $this->usuarios;
    }


    public function modificar($id, $nombre, $apellido, $tipo, $documento, $estado, $sexo)
    {
        $sql = "UPDATE public.tb_usuario SET nombre='$nombre', apellido='$apellido', tipo_documento='$tipo', documento_identificacion='$documento',estado='$estado',sexo='$sexo' WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM public.tb_usuario WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function get_usuario($id)
    {
        $sql = "SELECT * FROM TB_USUARIO WHERE id = $id";
        $result = pg_query($this->db, $sql);
        $row = pg_fetch_assoc($result);

        return $row;
    }
}
