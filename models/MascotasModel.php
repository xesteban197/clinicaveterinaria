<?php

class Mascotas_model
{


    private $mascotas;
    private $db;

    public function __construct()
    {
        $this->db = conectar::conexion();
        $this->mascotas = array();
    }

    public function get_mascotas()
    {
        $sql = "SELECT * FROM TB_MASCOTA";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->mascotas[] = $row;
        }

        return $this->mascotas;
    }

    public function insertar($nombre, $raza, $dueno, $sexo)
    {
        $sql = "INSERT INTO public.tb_mascota(nombre, raza, usuario_id, sexo)
            VALUES ('$nombre', '$raza', $dueno, '$sexo');";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->mascotas[] = $row;
        }

        return $this->mascotas;
    }


    public function modificar($id, $nombre, $raza, $dueno, $sexo)
    {
        $sql = "UPDATE public.tb_mascota SET nombre = '$nombre', raza = '$raza', usuario_id=$dueno, sexo='$sexo' WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM public.tb_mascota WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function get_mascota($id)
    {
        $sql = "SELECT * FROM TB_MASCOTA WHERE id = $id";
        $result = pg_query($this->db, $sql);
        $row = pg_fetch_assoc($result);

        return $row;
    }
}
