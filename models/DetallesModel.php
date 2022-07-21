<?php

class Detalles_model
{


    private $detalles;
    private $db;

    public function __construct()
    {
        $this->db = conectar::conexion();
        $this->detalles = array();
    }

    public function get_detalles()
    {
        $sql = "SELECT * FROM TB_DETALLEHISTORIACLINICA";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->detalles[] = $row;
        }

        return $this->detalles;
    }

    public function insertar($temperatura, $peso, $cardiaca, $respiratoria, $fecha, $alimentacion, $habitad, $observacion, $colaborador, $historia)
    {
        $sql = "INSERT INTO public.tb_detallehistoriaclinica(temperatura, peso, frecuencia_cardiaca, frecuencia_respiratoria, fecha_hora, alimentacion, habitad, observacion, colaborador_id, historiaclinica_id)
            VALUES ('$temperatura', $peso, $cardiaca, $respiratoria, '$fecha', '$alimentacion', '$habitad', '$observacion', $colaborador, $historia);";
        $result = pg_query($this->db, $sql);
        while ($row = pg_fetch_assoc($result)) {
            $this->detalles[] = $row;
        }

        return $this->detalles;
    }


    public function modificar($id, $temperatura, $peso, $cardiaca, $respiratoria, $fecha, $alimentacion, $habitad, $observacion, $colaborador, $historia)
    {
        $sql = "UPDATE public.tb_detallehistoriaclinica SET temperatura='$temperatura', peso=$peso, frecuencia_cardiaca=$cardiaca, frecuencia_respiratoria=$respiratoria, fecha_hora='$fecha', alimentacion='$alimentacion', habitad='$habitad', observacion='$observacion', colaborador_id=$colaborador, historiaclinica_id=$historia WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM public.tb_detallehistoriaclinica WHERE id=$id;";
        $result = pg_query($this->db, $sql);

        return $result;
    }

    public function get_detalle($id)
    {
        $sql = "SELECT * FROM TB_DETALLEHISTORIACLINICA WHERE id = $id";
        $result = pg_query($this->db, $sql);
        $row = pg_fetch_assoc($result);

        return $row;
    }
}
