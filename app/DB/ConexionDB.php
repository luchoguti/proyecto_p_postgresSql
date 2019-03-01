<?php

/**
* 
*/

class ConexionDB
{
	
    public static function getconnection(){

    	//Maquina Local
		$nombre_servidor = "baasu.db.elephantsql.com";
		$puerto="5432";
		$nombre_usuario = "ynxurgbx";
		$contrasena = "vHuwPBYkxzzNoXpfssVWCXr9V2pUgfjp";
		$nombre_bd = "ynxurgbx";


		$conexion = pg_connect("host='".$nombre_servidor."' port='".$puerto."' dbname='".$nombre_bd."' user='".$nombre_usuario."' password='".$contrasena."'");

		if (!$conexion){
			die("No ha sido posible establecer la conexión con la base de datos.");
		}else{
			return($conexion);
		}

                
    }


}




?>