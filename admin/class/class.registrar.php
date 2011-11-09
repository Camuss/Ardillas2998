<?php
include_once("class.conexion.php");
class Registrar{
	var $con;
	function Registrar(){
	$this->con=new DBManager;
	}
	
	//registrar cliente
	function mostrar_usuario_reg($cliente_num_documento){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM datos_cliente WHERE cliente_num_documento = '".$cliente_num_documento."'");
		}
	}	
	function reg_cliente($datos,$cliente_num_documento,$email,$telefono,$departamento,$provincia,$distrito,$tsmartphone,$tiposmartphone){
		if($this->con->conectar()==true){
			return mysql_query("INSERT INTO datos_cliente (datos,cliente_num_documento,email,telefono,departamento,provincia,distrito,tsmartphone,tiposmartphone) VALUES ('".$datos."','".$cliente_num_documento."','".$email."','".$telefono."','".$departamento."','".$provincia."','".$distrito."','".$tsmartphone."','".$tiposmartphone."')");
		}
	}
	
	//registrar cliente externo
	function mostrar_usuario_noreg($cliente_num_documento){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM datos_externo WHERE num_documento = '".$cliente_num_documento."'");
		}
	}	
	function reg_nocliente($nombres,$apellidos,$num_documento,$departamento,$provincia,$distrito,$telefono,$email,$clave){
		if($this->con->conectar()==true){
			return mysql_query("INSERT datos_externo (nombres,apellidos,num_documento,departamento,provincia,distrito,telefono,email,clave) VALUES ('".$nombres."','".$apellidos."','".$num_documento."','".$departamento."','".$provincia."','".$distrito."','".$telefono."','".$email."','".$clave."')");
		}
	}
}
?>