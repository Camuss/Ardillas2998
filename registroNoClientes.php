<script src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-min.js">    </script>

<script type="text/javascript">
	$(document).ready(function(){select_ubigeo();});
</script>

<script>
	$(document).ready(function(){
		$('#registroE').html5form();
	});
</script>


</head>

<body>

<!-- Registro No Clientes -->
<div id="registroExternos">

    <span class="titleForm">
        INSCR&Iacute;BETE PARA PARTICIPAR
    </span>
    
    
    <span class="formRegistroE">
        <form id="registroE" name="registroE" method="post" action="">
        <fieldset class="fieldset">
        
        
        <span class="leftxz">
        
        
        	<table width="600" border="0">
              <tr>
                <td>
                	<input name="nombre" id="nombre" class="textfield" type="text" tabindex="1" title="Ingrese su nombre" placeholder="Nombre" />
                </td>
                <td>
                	<input name="apellidos" id="apellidos" class="textfield" type="text" tabindex="2" title="Ingrese su apellido" placeholder="Apellidos" />
                </td>
              </tr>
              <tr>
                <td>
                	<input name="doc" id="doc" class="textfield" type="text" tabindex="3" title="Ingrese su DNI" placeholder="DNI" />
                </td>
                <td>
                	<select name="departamento" id="departamento" tabindex="4">
                        <option value="">DEPARTAMENTO</option>
                        <option value="1">AMAZONAS</option>
                        <option value="2">ANCASH</option>
                        <option value="3">APURIMAC</option>
                        <option value="4">AREQUIPA</option>
                        <option value="5">AYACUCHO</option>
                        <option value="6">CAJAMARCA</option>
                        <option value="7">CALLAO</option>
                        <option value="8">CUSCO</option>
                        <option value="9">HUANCAVELICA</option>
                        <option value="10">HUANUCO</option>
                        <option value="11">ICA</option>
                        <option value="12">JUNIN</option>
                        <option value="13">LA LIBERTAD</option>
                        <option value="14">LAMBAYEQUE</option>
                        <option value="15">LIMA</option>
                        <option value="16">LORETO</option>
                        <option value="17">MADRE DE DIOS</option>
                        <option value="18">MOQUEGUA</option>
                        <option value="19">PASCO</option>
                        <option value="20">PIURA</option>
                        <option value="21">PUNO</option>
                        <option value="22">SAN MARTIN</option>
                        <option value="23">TACNA</option>
                        <option value="24">TUMBES</option>
                        <option value="25">UCAYALI</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td>
                	<select name="provincia" id="provincia" tabindex="5" title="Seleccione su Provincia" >
                        <option value="">PROVINCIA</option>
                    </select>
                </td>
                <td>
                	<select name="distrito" id="distrito" tabindex="6">
                        <option value="">DISTRITO</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td>
                	<input name="telefono" id="telefono" class="textfield" type="text" tabindex="7" title="Ingrese su telefono" placeholder="Tel&eacute;fono" />
                </td>
                <td>
                	<input name="mail" id="mail" class="textfield" type="text" tabindex="8" title="Ingrese su email" placeholder="Email" />
                </td>
              </tr>
              <tr>
                <td>
                	<input name="remail" id="email2E" class="textfield" type="text" tabindex="9" title="Repita su email" placeholder="Repetir Email" />
                </td>
                <td>
                	<input name="password" id="password" class="textfield" type="password" tabindex="10" title="Ingrese su contraseña" placeholder="Contrase&ntilde;a" />
                </td>
              </tr>
              <tr>
                <td>
                	<input name="repassword" id="contrasena2E" class="textfield" type="password" tabindex="11" title="Ingrese su contraseña" placeholder="Repetir contrase&ntilde;a" />
                </td>
                <td>
                	<input name="terminos" id="terminos" type="checkbox" title="Acepte terminos y condiciones" value="" tabindex="12" /><label for="terminos"> Acepto T&eacute;rminos y Condiciones</label>
                </td>
              </tr>
            </table>
            
        </span>
        
        <span class="foot">
           <input name="ingresar" class="ingresar" type="button" tabindex="13" value="REGISTRAR" onclick="javascript:registro_nocliente();" /><br />
        </span>
        
        </fieldset>
        </form>
    </span>
    

</div>
<!-- Fin Registro No Clientes -->

</body>
</html>
