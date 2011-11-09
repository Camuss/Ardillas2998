// JavaScript
function select_ubigeo()
	{
		$("#departamento").change(function()
		{
			$("#departamento option:selected").each(function()
			{
				var opcion1=$(this).val();
				$.post("ubigeo.php", { opcion: 'provincia', id: opcion1 }, function(datos)  
					{
						$("#provincia").html(datos); 
						$("#distrito").html('<option value="">SELECCIONE</option>'); 
					});	
			});
		})	
	
		$("#provincia").change(function () 
		{
			$("#provincia option:selected").each(function () 
			{
				var opcion2=$(this).val();
				$.post("ubigeo.php", { opcion: 'distrito', id: opcion2 }, function(datos)
				{
					$("#distrito").html(datos);
				});	
			});
		})	
	}
	
	
	function crearCuenta(){
		//$("#inicioSesion").hide();
		//$("#registroExternos").show();
		$("#centerzBody").load("registroNoClientes.php");
		
	}
	
	/////////
	function no_cliente(){
		var mail=$('#mail').val();
		var password=$('#password').val();
		$.ajax({
		type   : 'POST',
		url    : 'admin/verificar.php',
		data   : 'mail='+mail+'&password='+password+'&cliente=no',
		dataType: 'json',
		success: function(msg){
			if(msg.estado=='ok')
			{
	
				var usuario = msg.datos;
/*				$("#inicioSesion").hide();
				$("#bienvenido").show();
				$(".nombreUsuario").html(usuario);
*/				
				$("#centerzBody").load("playAlvin.php?nom="+escape(usuario)+"&tji=zxd");
				$("#cerrarSesion").show();
		
			}
			else
			{
				alert("Error");
			}
			//msg.estado
			/*
			valores 
			
			- ok
			- error
			*/
			
			//msg.datos	
			/*
			valores msg.estado
			- datos del usuario
			*/
		}
		})
	}
	
	function cliente(){	
		var dni=$('#dni').val();
		$.ajax({
		type   : 'POST',
		url    : 'admin/verificar.php',
		data   : 'dni='+dni+'&cliente=si',
		dataType: 'json',
		success: function(msg){
			//msg.estado
			/*
			valores msg.estado
			- ok
			- error
			- noreg
			*/
			
			//msg.datos	
			/*
			valores msg.estado
			- datos del usuario
			*/
			
			if (msg.estado=='ok')
			{
	
				var usuario = msg.datos;
				$("#centerzBody").load('playAlvin.php?nom='+escape(usuario)+"&tji=afe");
				$("#cerrarSesion").show();
				
			}
			
			if (msg.estado=='noreg')
			{
				$("#inicioSesion").hide();
	
				$("#centerzBody").load("registroClientes.php?dni="+escape(dni));
			}
			
			if (msg.estado!='noreg' && msg.estado!='ok')
			{
				alert("Error");
			}
			
			
		}
		});	
	}
	
	function isValid(email) {
   		return /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i.test(email);
	}
	
	function registro_nocliente(){
		var nombre=$('#nombre').val();
		var apellidos=$('#apellidos').val();
		var doc=$('#doc').val();
		var departamento= $('#departamento option:selected').val();
		var provincia=$('#provincia option:selected').val();
		var distrito=$('#distrito option:selected').val();
		var mail=$('#mail').val();
		var remail=$('#remail').val();
		var password=$('#password').val();
		var repassword=$('#repassword').val();	
		var telefono=$('#telefono').val();
		var terminos=$("#terminos").attr("checked");
		if(terminos){
			$.ajax({
			type   : 'POST',
			url    : 'admin/registrar.php',
			data   : 'nombre='+nombre+'&apellidos='+apellidos+'&doc='+doc+'&departamento='+departamento+'&provincia='+provincia+'&distrito='+distrito+'&mail='+mail+'&password='+password+'&telefono='+telefono+'&cliente=no',
			dataType: 'json',
			success: function(msg){
					//msg.estado
					/*
					retorna un valor: estado
					estado = 0 : usuario ya registrado
					estado = 1 : se registro el usuario
					estado = 2 : error en el registro(error query)
					*/
					
					
					if (msg.estado == 0)
					{
						//si el usuario ya esta registrado
						alert("El usuario ya esta registrado");
						return;
					}
					else if (msg.estado == 1)
					{
						//si el registro fue satisfactorio
						var usuario = nombre + ' ' + apellidos;
						$("#centerzBody").load("playAlvin.php?nom="+escape(usuario)+"&tji=ols");						
					}
					else
					{
						//si hay un error en el registro
					}
					
				}
			});			
		}else{
			alert('debes aceptar los terminos');
		}	
	}
	
	
	function registro_cliente(){
		var datos=$('#nombres').val();
		var doc=$('#docC').val();
		var mail=$('#mailC').val();
		var remail=$('#remailC').val();
		var departamento= $('#departamento option:selected').val();
		var provincia=$('#provincia option:selected').val();
		var distrito=$('#distrito option:selected').val();
		var telefono=$('#telefonoC').val();
		var smartphone=$('#smartphone').attr('checked');
		var terminos=$('#terminosC').attr('checked');

		if(datos=='' || datos=='Nombres y apellidos'){
			$('#warning1').fadeIn(350);
			} else {
				$('#warning1').fadeOut(200);
				}
		if(doc==''){
			$('#warning2').fadeIn(350);
			} else {
				$('#warning2').fadeOut(200);
				}
		if(mail=='' || !isValid(mail)){
			$('#warning3').fadeIn(350);
		} else {
				$('#warning3').fadeOut(200);
		}
			

		if(terminos){
			if(smartphone){
				tsmartphone='si';
			}else{
				tsmartphone='no';
			}
			//alert("Valor Label: " + $("input[name='tiposmartphone']:radio:checked").val());
			//if($("input[name='tiposmartphone']").attr("checked")){
				var tiposmartphone = $("input[name='tiposmartphone']:radio:checked").val(); 
			//}else{
				//var tiposmartphone = ''; 
			//}
			$.ajax({
			type   : 'POST',
			url    : 'admin/registrar.php',
			data   : 'datos='+datos+'&doc='+doc+'&mail='+mail+'&departamento='+departamento+'&provincia='+provincia+'&distrito='+distrito+'&tsmartphone='+tsmartphone+'&tiposmartphone='+tiposmartphone+'&telefono='+telefono+'&cliente=si',
			dataType: 'json',
			success: function(msg){
					//msg.estado
					/*
					retorna un valor: estado
					estado = 0 : usuario ya registrado
					estado = 1 : se registro el usuario
					estado = 2 : error en el registro(error query)
					*/
					
					
					if (msg.estado == 0)
					{
						alert("Usuario ya registrado");
					}
					else if (msg.estado == 1)
					{
						var usuario = datos;
						/*$("#registroClientes").hide();
						$("#bienvenido").show();
						$(".nombreUsuario").html(usuario);*/
						$("#centerzBody").load("playAlvin.php?nom="+escape(usuario)+"&tji=thw");
				}
					else
					{
						alert("Error en el registro");
					}
					
				}
			});			
		}else{
			alert('debes aceptar los terminos');
		}	
	}