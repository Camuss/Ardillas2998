<?php
/*
Template Name: Procesar
*/

// Configuracion
$uploaddir = "http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/wp-content/uploads/CV/";
$allowed_ext = "doc, pdf, docx";
$max_size = "5000000"; // 50000 is the same as 50kb
$ok = false;

// Vamos a leer las variables
$nombre = limpiar($_POST["txt_nombre"]);
$ape_pat = limpiar($_POST["txt_ape_pat"]);
$ape_mat = limpiar($_POST["txt_ape_mat"]);
$fec_nac = limpiar($_POST["txt_fec_nac"]);
$dni = limpiar($_POST["txt_dni"]);
$departamento = limpiar($_POST["txt_departamento"]);
$provincia = limpiar($_POST["txt_provincia"]);
$distrito =	limpiar($_POST["txt_distrito"]);
$direccion = limpiar($_POST["txt_direccion"]);
$telefono = limpiar($_POST["txt_telefono"]);
$grado = limpiar($_POST["txt_grado"]);
$puesto = limpiar($_POST["cb_puesto"]);
$CV = $_FILES["txt_cv"];

// Verificamos la extension
$extension = pathinfo($CV["name"]);
$extension = $extension[extension];
$allowed_paths = explode(", ", $allowed_ext);

if( strlen($CV['name']) < 2 ){
	wp_redirect("http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/postular?j=" . $puesto . "&e=4");
	exit("Error 4");
}

// Tiene 2 puntos el tipo de archivo
$puntos = explode(".",$CV["name"]);
if ( count($puntos) > 2 ){
	wp_redirect("http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/postular?j=" . $puesto . "&e=5");
	exit("Error 5");
}
// mail("diegolerma@gmail.com","Ojo","Es " . $puntos . " / " . count($puntos) . " y " . (count($puntos) > 2) . " en " . $CV["name"]);

for($i = 0; $i < count($allowed_paths); $i++) {
	if ($allowed_paths[$i] == "$extension") {
		$ok = true;
	}
}

// Verificamos el tamaño
if ( $ok ) {
	if($CV['size'] > $max_size){
//		echo "File size is too big!";
		wp_redirect("http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/postular?j=" . $puesto . "&e=3");
	} else {
		$tamano = $CV['size'];
		$tipo = $CV['type'];
		$archivo = $CV['name'];
		$prefijo = date("d-m-Y-H_i_s");
		// tamaño correcto :-)
/*		if( is_uploaded_file($CV['tmp_name']) ){
			move_uploaded_file($CV['tmp_name'],$uploaddir.'/'.$CV['name']);
			echo "Archivo subido: <b>".$archivo."</b>";
		} */

		// Lo movemos al servidor
		$destino =  $uploaddir . $prefijo . "_" . $archivo;
		if (copy($CV['tmp_name'],$destino)) {
			// Se subio el archivo
//			echo "Archivo subido: <b>".$archivo."</b>";
			// Averiguamos el post que marco
			if ( is_numeric($puesto) ){
				$elPuesto = get_post($puesto);
			} else {
				$elPuesto = -1;
			}
			// Debemos subir a la BD
			$tablita = array(
				'nombre' => $nombre,
				'ap_paterno' => $ape_pat,
				'ap_materno' => $ape_mat,
				'fec_nac' => $fec_nac,
				'telefono' => $telefono,
				'dni' => $dni,
				'direccion' => $direccion,
				'grado' => $grado,
				'cv' => $destino,
				'departamento' => $departamento,
				'provincia' => $provincia,
				'distrito' => $distrito,
				'cv_size' => $tamano,
				'cv_mime' => $tipo,
				'puesto' => $elPuesto->post_title,
				'idpuesto' => $puesto,
				'ip_registro' => $_SERVER['REMOTE_ADDR'],
				'fec_registro' => date("Y-m-d H:i:s"),
				'estado' => '1'
			);
			$estandar = array( '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s', '%d', '%s','%s',  '%d');
			$cual = $wpdb->insert( $wpdb->prefix . "postulantes", $tablita, $estandar );
//			echo "ok " . $cual;
			wp_redirect("http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/gracias/?j=" . $cual);
		} else {
//			echo "Error al subir el archivo <b>".$archivo."</b>";
			wp_redirect("http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/postular?j=" . $puesto . "&e=2");
		}
	}
} else {
//	echo "El archivo no se puede subir";
	wp_redirect("http://www.a1peru.com/clientes/mapfre/trabajaenmapfre/postular?j=" . $puesto . "&e=1");
}
?>
