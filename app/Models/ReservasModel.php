<?php 

/**
* 
*/
require_once __DIR__."/../DB/ConexionDB.php";

class ReservasModel extends ConexionDB
{
	
    private $reservas;
    
    function __construct() {
        ConexionDB::getconnection();
        $this->reservas = array();
    }
            
    public function getReservas(){
        $query=pg_query("select * from reservas inner join clientes using(id_cliente) inner join hoteles using(id_hotel) inner join tipo_acomodacion using(id_tipo_acomod)") or die(pg_last_error());
        while ($fila=pg_fetch_assoc($query)) {
        	$this->reservas[]= $fila;
        }
        return $this->reservas;
    }
    
    public function getReservasId($id){

        $query=pg_query("select * from reservas where id_reserva='".$id."'") or die(pg_last_error());

  		while ($fila=pg_fetch_assoc($query)) {
        	$this->reservas[]= $fila;
        }
        return $this->reservas;
    }

    public function reservasadd($request){

        $query="INSERT INTO reservas (id_cliente,id_hotel,cantidad_personas_reserva,id_tipo_acomod,fecha_creacion)VALUES('".$request['sel_cliente']."','".$request['sel_hotel']."','".$request['text_cantp_control']."','".$request['sel_tipo_acomodacion']."',current_timestamp)   ";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());

    }

    public function reservasEdit($request){

        $query="UPDATE reservas SET id_cliente='".$request['sel_cliente']."',id_hotel='".$request['sel_hotel']."',cantidad_personas_reserva='".$request['text_cantp_control']."',id_tipo_acomod='".$request['sel_tipo_acomodacion']."' WHERE id_reserva='".$request['txt_id']."'";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());

    }

    public function reservasDelete($id){

        $query="DELETE FROM reservas  WHERE id_reserva='".$id."'";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());


    }
}


?>