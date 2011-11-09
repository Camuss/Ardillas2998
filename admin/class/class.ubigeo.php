<?php
include("class.conexion.php");
class Ubigeo{
	var $con;
	function Ubigeo(){
	$this->con=new DBManager;
	}
	//mostrar provincias
	function mostrar_provincia($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM provincia WHERE COD_DEPARTAMENTO = ".$id);
		}
	}
	//mostrar distritos
	function mostrar_distrito($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM distrito WHERE COD_PROV = ".$id);
		}
	}
}
?>