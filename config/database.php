<?php
class conectar
{

	public static function conexion()
	{

		$conexion = pg_connect("host=localhost port=5433 dbname=clinicaveterinaria user=postgres password=root");

		return $conexion;
	}
}
