<?php 
class DBManager{
	var $conect;  
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	
	function DBManager(){
		$this->BaseDatos = "alvinadelante";
		$this->Servidor = "mysql.alvinadelante.com";
		$this->Usuario = "alvinadelante";
		$this->Clave = "persefone";
	}

	 function conectar() {
		if(!($con=@mysql_connect($this->Servidor,$this->Usuario,$this->Clave))){
			echo"Error al conectar a la base de datos";	
			exit();
		}
		if (!@mysql_select_db($this->BaseDatos,$con)){
			echo "Error al seleccionar la base de datos";  
			exit();
		}
		$this->conect=$con;
		return true;	
	}
}
?>