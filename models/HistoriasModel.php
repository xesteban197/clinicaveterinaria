<?php

class Historias_model
{


    private $historias;
    private $db;

    public function __construct()
    {
        $this->db = conectar::conexion();
        $this->historias = array();
    }

    public function get_mascotas()
    {
        $sql = "SELECT * FROM TB_MASCOTAS";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->historias[] = $row;
        }

        return $this->historias;
    }

    public function get_historias()
    {
        $sql = "SELECT * FROM TB_HISTORIACLINICA";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->historias[] = $row;
        }

        return $this->historias;
    }

    public function insertar($mascota, $fecha)
    {
        $sql = "INSERT INTO public.tb_historiaclinica(mascota_id, fecha_creacion)
            VALUES ('$mascota', '$fecha');";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->historias[] = $row;
        }

        return $this->historias;
    }


    public function modificar($id, $mascota, $fecha)
    {
        $sql = "UPDATE public.tb_historiaclinica SET mascota_id = '$mascota', fecha_creacion = '$fecha' WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM public.tb_historiaclinica WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function get_historia($id)
    {
        $sql = "SELECT * FROM TB_HISTORIACLINICA WHERE id = $id";
        $result = pg_query($this->db, $sql);
        $row = pg_fetch_assoc($result);

        return $row;
    }
}
