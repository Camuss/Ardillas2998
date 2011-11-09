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

<!-- Registro Clientes -->
            <div id="registroClientes">
            
            	<span class="titleForm">
	            	INSCR&Iacute;BETE PARA PARTICIPAR
                </span>
                
                
                <span class="formRegistroE">
                	<form id="registroE" name="registroE" method="post" action="">
                    <fieldset class="fieldset">
					
                    
                    <span class="left">
                    
                    	<table width="560" border="0">
                          <tr>
                            <td>
                            	<p class="pInput">
                                <input name="nombres" id="nombres" class="textfield" type="text" tabindex="1" title="Ingrese su nombre y apellido" placeholder="Nombres y apellidos" />
                                <span id="warning1" class="warning">(*)</span>
                                </p>
                            </td>
                            <td>
                            	<select name="departamento" id="departamento" tabindex="8">
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
                            	<p class="pInput">
                                <input name="docC" id="docC" class="textfield" type="text" disabled="disabled" value="<?php echo $_GET["dni"]; ?>" />
                                <span id="warning2" class="warning">(*)</span>
                                </p>
                            </td>
                            <td>
                            	<select name="provincia" id="provincia" tabindex="9" title="Seleccione su Provincia" >
                                    <option value="">PROVINCIA</option>
                                </select>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            	<p class="pInput">
                                    <input name="mailC" id="mailC" class="textfield" type="text" tabindex="2" title="Ingrese su email" placeholder="Email" />
                                    <span id="warning3" class="warning">(*)</span>
                                </p>
                            </td>
                            <td>
                            	<select name="distrito" id="distrito" tabindex="10">
                                    <option value="">DISTRITO</option>
                                </select>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            	<input name="remailC" id="remailC" class="textfield" type="text" tabindex="3" title="Repita su email" placeholder="Repetir Email" />
                            </td>
                            <td>
                            	<input name="telefonoC" id="telefonoC" class="textfield" type="text" tabindex="11" title="Ingrese su telefono" placeholder="Tel&eacute;fono" />
                            </td>
                          </tr>
                          <tr>
                            <td>
                            	<input name="smartphone" type="checkbox" id="smartphone" title="¿Tienes smartphone?" value="smartphone" tabindex="4" />
                        		<label for="smartphone"> &iquest;Tienes Smartphone?</label>
                            </td>
                            <td>
                            	<input name="terminosC" id="terminosC" type="checkbox" title="Acepte terminos y condiciones" value="" tabindex="12" /><label for="terminosC"> Acepto T&eacute;rminos y Condiciones</label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            	<p class="radiosB">
                                    <label>
                                    <input type="radio" tabindex="5" id="phones_0" value="Blackberry" name="tiposmartphone">
                                    Blackberry</label>
                                    <label>
                                    <input type="radio" tabindex="6" id="phones_1" value="iPhone" name="tiposmartphone">
                                    iPhone</label>
                                    <label>
                                    <input type="radio" tabindex="7" id="phones_2" value="Otros" name="tiposmartphone">
                                    Otros</label>
                                </p>
                            </td>
                            <td>
                            </td>
                          </tr>
                        </table>
                    </span>
                    
                    <span class="foot">
 	                <input name="ingresar" class="ingresar" type="button" tabindex="13" value="REGISTRAR" onClick="javascript:registro_cliente();" /><br />
                       <span class="message"></span>
                    </span>
                    
                    </fieldset>
                    </form>
                </span>
                
            
            </div>
            <!-- Fin Registro Clientes -->

</body>
</html>
