<?php
session_start();
include('class/class.verificar.php');
$objVerificar = new Verificar;
if($_POST){
	$cliente  = $_POST['cliente'];
	if($cliente=="si"){
		$dni=$_POST['dni'];
		$consultauser=$objVerificar->mostrar_usuario_reg($dni);
		if(mysql_num_rows($consultauser)>0){
			$row = mysql_fetch_array($consultauser,MYSQL_ASSOC);
			echo "{estado:'ok',datos:'".$row['nombres']."'}";
			$_SESSION['id']=session_id();
		}else{
			echo "{estado:'error'}";
			session_destroy();
		}
	}else{ 
		$mail     = $_POST['mail'];
		$password = $_POST['password'];
		$consultanouser=$objVerificar->mostrar_usuario_noreg($mail,$password);
		if(mysql_num_rows($consultanouser)>0){
			$row = mysql_fetch_array($consultauser,MYSQL_ASSOC);
			echo "{estado:'ok',datos:'".$row['nombres']." ".$row['nombres']."'}";
			$_SESSION['id']=session_id();
		}else{
			echo "{estado:'error'}";
			session_destroy();
		}		
	}
}
?>