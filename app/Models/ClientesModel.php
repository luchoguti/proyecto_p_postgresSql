<?php 


/**
* 
*/
require_once __DIR__. "/../DB/ConexionDB.php";

class ClientesModel extends ConexionDB
{
    private $clientes;

	function __construct()
	{
		ConexionDB::getconnection();
        $this->clientes = array();
	}

	public function getClientes(){

		$query=pg_query("select * from clientes")or die(pg_last_error());
        while ($fila=pg_fetch_assoc($query)) {
        	$this->clientes[]= $fila;
        }
        return $this->clientes;

	}

	public function getClientesId($id){

        $query=pg_query("select * from clientes where id_cliente='".$id."'") or die(pg_last_error());

        while ($fila=pg_fetch_assoc($query)) {
        	$this->clientes[]= $fila;
        }
        return $this->clientes;
    }

    public function clientesadd($request){

        $query="INSERT INTO clientes(num_ti_cl, nombre_cl, direccion_cl, email_cl,telefono_cl,fecha_creacion)VALUES('".$request['text_n_ident_cl_control']."','".$request['text_nom_cl_control']."','".$request['text_direccion_cl_control']."','".$request['text_email_cl_control']."','".$request['text_telefono_cl_control']."',current_timestamp)   ";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());

    }

    public function clientesEdit($request){

        $query="UPDATE clientes SET num_ti_cl='".$request['text_n_ident_cl_control']."',nombre_cl='".$request['text_nom_cl_control']."',direccion_cl='".$request['text_direccion_cl_control']."',email_cl='".$request['text_email_cl_control']."',telefono_cl='".$request['text_telefono_cl_control']."' WHERE id_cliente='".$request['txt_id']."'";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());

    }

    public function clientesDelete($id){

        $query="DELETE FROM clientes  WHERE id_cliente='".$id."'";
        $exeteQuery=pg_query($query)or die($query." ".pg_last_error());


    }

}


?>