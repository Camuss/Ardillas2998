<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://ogp.me/ns/fb#"><!-- InstanceBegin template="/Templates/MainTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
      
      
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta property="og:title" content="BBVA Continental :: Alvin y las Ardillas" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.alvinadelante.com" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="BBVA Continental :: Alvin y las Ardillas" />
<meta property="fb:admins" content="1134009511" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BBVA Continental :: Alvin y las Ardillas</title>
<link href="css/forms.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<script src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-min.js">
    </script>
    <script>
        $(document).ready(function(){
            $('#loginE').html5form();
			$('#loginC').html5form();
        });
    </script>

<!-- InstanceEndEditable -->
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/alvin.css" rel="stylesheet" type="text/css" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />


  <!-- InstanceBeginEditable name="head" -->

     
  <!-- InstanceEndEditable -->
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=303357076356685";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="content">

	<div id="background">
    
    	<div id="header">
        	<div class="logo"><img src="imgs/bbva.png" alt="Logo BBVA" title="BBVA Continental" /></div>
            <div class="social">
                <span style="float:right">
                	<ul>
                    	<li><a id="tw" href="http://www.twitter.com/#!/ContinentalBBVA" target="_blank"></a> </li>
                        <li><a id="fb" href="http://www.facebook.com/BBVAContinental" target="_blank"></a></li>
                        <li><a id="mailb" href="http://www.a1peru.com" target="_blank"></a></li>
						<li id="cerrarSesion" style="display:none"><a id="session" href="closeA.php"></a></li>                        
                        
                    </ul>
                </span>
           	  <span style="float:right; margin-top:3px;"><fb:like href="http://www.alvinadelante.com" send="false" layout="button_count" width="115" show_faces="false"></fb:like></span>
          </div>
        </div>
        
        
         <div id="navigation">
        	<ul>
            	<li><a id="trailer" href="index.html"></a></li>
                <li><a id="juegos" href="juegos.php"></a></li>
                <li><a id="premios" href="premios.html"></a></li>
                <li><a id="nada" href="#"></a></li>
                <li><a id="promociones" href="#"></a></li>
                <li><a id="terminosM" href="terminos.html"></a></li>
            </ul>
        </div>
        
        <div id="logoAlvin">
        	<img src="imgs/alvinLogo.png" alt="Logo Alvin y las Ardillas 3" title="Alvin y las Ardillas 3" />
        </div>
        
		</div> <!-- fin div header -->
		
		<!-- InstanceBeginEditable name="BodyContent" -->
		<div id="centerzBody">
		 	
            <?php	
	
			if (isset($_SESSION["id"]))
			{
							
			?>
        
            	<script>
					
					$("#cerrarSesion").show();
					
					$("#centerzBody").load("playAlvin.php?sji=_trg_");
				</script>
            
            <?php

			}
			else
			{
			?>
				
                <script>
					$("#cerrarSesion").hide();
				</script>
                <!-- Inicio Sesion -->
                <div id="inicioSesion">
                
                    <span class="titleForm">
                        INICIA TU SESI&Oacute;N
                    </span>
                    
                    
                    <span class="noClientes">
                        <form id="loginE" name="loginE" method="post" action="">
                        <fieldset class="fieldset">
                            <span>NO CLIENTES</span>
                            <input name="mail" id="mail" class="textfield" type="email" tabindex="1" title="Ingrese su email" placeholder="Email" /><br class="nobr" />
                            <input name="password" id="password" class="textfield" type="password" tabindex="2" title="Ingrese su contraseña" placeholder="Contrase&ntilde;a" /><br  class="nobr"/>
                            <a href="recuperar.html" onclick="javascript:giveMePass();">&iquest;Olvidaste tu contrase&ntilde;a?</a><br />
                            <input name="ingresar_nocli" class="ingresar" type="button" tabindex="3" value="Ingresar" onclick="javascript:no_cliente();" /><br /><br />
                            <input name="registro" class="crearC" type="button" tabindex="3" onclick="javascript:crearCuenta();" />
                            
                        </fieldset>
                        </form>
                    </span>
                    <span class="clientes">
                    
                        <form id="loginC" name="loginC" method="post" action="">
                        <fieldset class="fieldset">
                        <span>CLIENTES</span>
                        <input name="dni" id="dni" class="textfield" type="text" tabindex="4" title="Ingrese su DNI" placeholder="DNI"/>
                        <br />
                        <br />
                        <input name="ingresar" class="ingresar" type="button" tabindex="5" value="Ingresar" onclick="javascript:cliente();" /><br /><br />
                        </fieldset>
                        </form>
                    
                    
                    </span>
                
                </div>
                <!-- Fin Inicio Sesion -->
                
                
			<?php
            }
			?>
            
            
            
            <!-- Recuperar Contraseña -->
            <!-- Fin Recuperar contraseña -->
            
            
            
	    </div>
		<!-- InstanceEndEditable --><!-- fin div centerBody -->
        
        
      <div id="disclousure">
        	<img src="imgs/disclousure.png" alt="Alvin y las Ardillas 3" title="Veala gracias al BBVA Continental" />
        </div> <!-- FIn Disclousure -->
        
        <div id="banners">
        </div>
    
    </div>


</div>

</body>
<!-- InstanceEnd --></html>
