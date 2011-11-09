<?php
include_once("class.conexion.php");
class Verificar{
	var $con;
	function Verificar(){
	$this->con=new DBManager;
	}
	//mostrar provincias
	function mostrar_usuario_reg($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM cliente WHERE num_documento = '".$id."'");
		}
	}
	//mostrar distritos
	function mostrar_usuario_noreg($mail,$password){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM datos_externo WHERE email = '".$mail."' AND clave = '".$password."'");
		}
	}
}
?>