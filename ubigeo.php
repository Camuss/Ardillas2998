<?php
include("admin/class/class.ubigeo.php");
$objUbigeo=new Ubigeo;
$id     = $_POST['id'];
$opcion = $_POST['opcion'];
if($_POST){
	if($id!=""){
		if($opcion == "provincia"){
		$consultapro=$objUbigeo->mostrar_provincia($id);
		if(mysql_num_rows($consultapro)>0){
			echo '<option value="">PROVINCIA</option>';
			while($row = mysql_fetch_array($consultapro,MYSQL_ASSOC)){
				echo '<option value="'.$row['COD_PROV'].'">'.utf8_encode($row['NOM_PROV']).'</option>';
			}
		}else{
			echo '<option value="">SELECCIONE</option>';
		}
		}else{
		$consultapro=$objUbigeo->mostrar_distrito($id);
		if(mysql_num_rows($consultapro)>0){
			echo '<option value="">DISTRITO</option>';
			while($row = mysql_fetch_array($consultapro,MYSQL_ASSOC)){
				echo '<option value="'.$row['COD_DISTRITO'].'">'.utf8_encode($row['NOM_DISTRITO']).'</option>';
			}
		}else{
			echo '<option value="">SELECCIONE</option>';
		}	
		}
	}else{
		echo '<option value="">SELECCIONE</option>';
	}
}
?>