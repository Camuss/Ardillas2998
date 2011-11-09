<?php
session_start();
include('class/class.registrar.php');
$objRegistrar = new Registrar;
$datos  		 = htmlspecialchars(trim($_POST['datos']));
$nombre  		 = htmlspecialchars(trim($_POST['nombre']));
$apellidos  		 = htmlspecialchars(trim($_POST['apellidos']));
$doc  			 = htmlspecialchars(trim($_POST['doc']));
$mail  			 = htmlspecialchars(trim($_POST['mail']));
$departamento    = htmlspecialchars(trim($_POST['departamento']));
$provincia       = htmlspecialchars(trim($_POST['provincia']));
$distrito        = htmlspecialchars(trim($_POST['distrito']));
$tsmartphone     = htmlspecialchars(trim($_POST['tsmartphone']));
$tiposmartphone  = htmlspecialchars(trim($_POST['tiposmartphone']));
$telefono        = htmlspecialchars(trim($_POST['telefono']));
$cliente         = htmlspecialchars(trim($_POST['cliente']));
$password		 = htmlspecialchars(trim($_POST['password']));
if($_POST){
	if($cliente=="si"){
		$consultauser=$objRegistrar->mostrar_usuario_reg($doc);
		if(mysql_num_rows($consultauser)>0){
			 echo "{estado:0}";
		}else{
			if($objRegistrar->reg_cliente($datos,$doc,$mail,$telefono,$departamento,$provincia,$distrito,$tsmartphone,$tiposmartphone)){
				echo "{estado:1}";
			}else{
				echo "{estado:2}";
			}
		}
	}else{
		$consultauser=$objRegistrar->mostrar_usuario_noreg($doc);
		if(mysql_num_rows($consultauser)>0){
			 echo "{estado:0}";
		}else{
			if($objRegistrar->reg_nocliente($nombre,$apellidos,$doc,$departamento,$provincia,$distrito,$telefono,$mail,$password)){
				echo "{estado:1}";
			}else{
				echo "{estado:2}";
			}
		}
	}
}
?>