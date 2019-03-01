<?php 


/**
* 
*/
require_once __DIR__. "/../DB/ConexionDB.php";

class TipoAcomodacionModel extends ConexionDB
{
    private $tipo_acomodacion;

	function __construct()
	{
		ConexionDB::getconnection();
        $this->tipo_acomodacion = array();
	}

	public function getTipoAcomodacion(){

		$query=pg_query("select * from tipo_acomodacion")or die(pg_last_error());
        while ($fila=pg_fetch_assoc($query)) {
        	$this->tipo_acomodacion[]= $fila;
        }
        return $this->tipo_acomodacion;

	}
}


?>