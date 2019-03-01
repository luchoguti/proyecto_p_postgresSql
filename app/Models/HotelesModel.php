<?php 


/**
* 
*/
require_once __DIR__. "/../DB/ConexionDB.php";

class HotelesModel extends ConexionDB
{
    private $hoteles;

	function __construct()
	{
		ConexionDB::getconnection();
        $this->hoteles = array();
	}

	public function getHoteles(){

		$query=pg_query("select * from hoteles")or die(pg_last_error());
        while ($fila=pg_fetch_assoc($query)) {
        	$this->hoteles[]= $fila;
        }
        return $this->hoteles;

	}

		public function getHotelesId($id){

        $query=pg_query("select * from hoteles where id_hotel='".$id."'") or die(pg_last_error());

        while ($fila=pg_fetch_assoc($query)) {
        	$this->hoteles[]= $fila;
        }
        return $this->hoteles;
    }

    public function hotelesAdd($request){

        $query="INSERT INTO hoteles(nombre_ho, direccion_ho, email_ho, fecha_creacion)VALUES('".$request['nombre_ho']."','".$request['direccion_ho']."','".$request['email_ho']."',current_timestamp)   ";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());

    }

    public function hotelesEdit($request){

        $query="UPDATE hoteles SET nombre_ho='".$request['nombre_ho']."',direccion_ho='".$request['direccion_ho']."',email_ho='".$request['email_ho']."' WHERE id_hotel='".$request['txt_id']."'";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());

    }

    public function hotelesDelete($id){

        $query="DELETE FROM hoteles  WHERE id_hotel='".$id."'";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());


    }
}


?>