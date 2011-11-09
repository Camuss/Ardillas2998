<?php

session_start();


if (isset($_SESSION["id"]))
{
	$showScreen = $_GET["sji"];
	
	

?>
	
	
    <?php
		if ($showScreen == "_trg_")
		{
	?>
    
    	<script type="text/javascript">
			$("#bienvenido").hide();
			$("#seleccionJuego").show();
        </script>	
        
    <?php		
		}
		else
		{
	?>
    	<script type="text/javascript">
			$("#bienvenido").show();
			$("#seleccionJuego").hide();
        </script>
    
    <?php		
		}
	?>
    

	<script type="text/javascript">
	function initScreen(){
			$("#bienvenido").hide();
			$("#seleccionJuego").show();
		}
	</script>
    
    
    
    
	<!-- Bienvenida del cliente -->
	<div id="bienvenido">
	
		<span class="titleForm">
			BIENVENIDO
		</span>
		
		
		<span class="saludo">
			<p id="mensajeSaludo">
				Hola <?php echo $_GET["nom"]; ?>,
				<br /><br />
				Prepárate para ganar súper premios con el BBVA Continental y los divertidos juegos de Alvin y las Ardillas.
				Realiza consumos o retiros con tus tarjetas del banco y acumula puntos para participar.
				<br /><br />
				<a href="#" id="siguiente" onclick="javascript:initScreen();"></a>
			</p>                    
		</span>
	
	</div>
	<!-- Fin Bienvenida del cliente -->
	
	
	<!-- Pantalla seleccion de juegos -->
	<div id="seleccionJuego" style="display:none">
	
		<span class="titleForm">
			ELIGE C&Oacute;MO QUIERES GANAR
		</span>
		
		
		<span class="botonesJuegos">
			<a href="#" id="gameA"></a>
			<br />
			<a href="#" id="gameB"></a>               
		</span>
	
	</div>
	<!-- Fin Pantalla seleccion de juegos -->

<?php	

}

else
{
	echo "no hay nada que mostrar";
}

?>



