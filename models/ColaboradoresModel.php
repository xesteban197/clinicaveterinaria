<?php

class Colaboradores_model
{


    private $colaboradores;
    private $db;

    public function __construct()
    {
        $this->db = conectar::conexion();
        $this->colaboradores = array();
    }

    public function get_colaboradores()
    {
        $sql = "SELECT * FROM TB_COLABORADOR";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->colaboradores[] = $row;
        }

        return $this->colaboradores;
    }

    public function insertar($nombre, $apellido, $cargo, $especialidad, $tipo, $documento)
    {
        $sql = "INSERT INTO public.tb_colaborador(nombre, apellido, cargo, especialidad, tipo_documento, documento_identificacion)
            VALUES ('$nombre', '$apellido', '$cargo', '$especialidad', '$tipo', '$documento');";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->colaboradores[] = $row;
        }

        return $this->colaboradores;
    }


    public function modificar($id, $nombre, $apellido, $cargo, $especialidad, $tipo, $documento)
    {
        $sql = "UPDATE public.tb_colaborador SET nombre='$nombre', apellido='$apellido', cargo='$cargo', especialidad='$especialidad', tipo_documento='$tipo', documento_identificacion='$documento' WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM public.tb_colaborador WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function get_colaborador($id)
    {
        $sql = "SELECT * FROM TB_COLABORADOR WHERE id = $id";
        $result = pg_query($this->db, $sql);
        $row = pg_fetch_assoc($result);

        return $row;
    }
}
