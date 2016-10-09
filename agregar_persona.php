<?php
include "conUCV.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>redport</title>
  <link rel='stylesheet' type='text/css' href='sass/main.css' />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <link href="https://file.myfontastic.com/KHbqgc9xxoCbZJYRdioaqd/icons.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' href='sass/styles.css' />
</head>
<body>
   <div class="pagina_esp">
   <!-- ======= header======= -->
  <div class="header2">
  	<div class="back-button"><a onclick="history.back()"><div class="rpicon-back"></div></a></div>
    <div class="title_header"><h1>
			Agregar persona</h1></div>

  </div>

	   <form action="agregar_persona_POST.php" class="login-rut_2" method="POST">
<div class="container">
	<!--<label class="label_rut_2" for="rut">Ingresa el nombre</label>-->
	<h1 id="title_form">Ingresa el nombre</h1>


	<div class="input_rut">
		<!--<form action="agregar_persona_POST.php" class="login-rut_2" method="POST">-->
		    <input class="login-rut__box" type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre">
			<input type="text" hidden id="rut" name="rut" value=<?php echo $_REQUEST['rut']; ?>>
			<input type="text" hidden id="estado" name="estado" value="">
		  <!--</form>-->
	</div>
</div>

<div class="container">

  	<h1 id="title_form">Estado actual</h1>
	<div class="toggle_box">
		<div class="text_box_2">
		    <input type="checkbox" id="toggle_small_7" class="toggle_button_small" onclick="checkAddress(this,0)"/>
		  	<label for="toggle_small_7" class="rpicon-toggle-small"><p class="texto-toggle">Fuera&nbsp;de&nbsp;riesgo</p></label>
		 </div>
		<div class="text_box_2">
			<input type="checkbox" id="toggle_small_8" class="toggle_button_small_2" onclick="checkAddress(this,1)"/>
		  	<label for="toggle_small_8" class="rpicon-toggle-small"><p class="texto-toggle">Herido</p></label>
		</div>
		<div class="text_box_2">
			<input type="checkbox" id="toggle_small_9" class="toggle_button_small_2" onclick="checkAddress(this,2)"/>
		  	<label for="toggle_small_9" class="rpicon-toggle-small"><p class="texto-toggle">Atrapado</p></label>
		</div>
		<div class="text_box_2">
			<input type="checkbox" id="toggle_small_10" class="toggle_button_small_2" onclick="checkAddress(this,3)"/>
		  	<label for="toggle_small_10" class="rpicon-toggle-small"><p class="texto-toggle">Enfermo&nbsp;crónico</p></label>
		</div>
		<div class="text_box_2">
			<input type="checkbox" id="toggle_small_11" class="toggle_button_small_2" onclick="checkAddress(this,4)"/>
		  	<label for="toggle_small_11" class="rpicon-toggle-small"><p class="texto-toggle">Fallecido</p></label>
		</div>
  </div>
   
</div>

		   <input class="button_rut" type="submit" />




<!--<a class="button" onclick="history.back()">Agregar</a>-->

</div>
   </form>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/main.js"></script>
   <script>
	   //var estado+"";
   function checkAddress(checkbox,sta)
   {
   if (checkbox.checked)
   {
	   //alert(sta);
	   var valor = document.getElementById("estado").value;
	   var estado = ''+sta;
	   //alert(valor);
	   if(valor.indexOf(estado) <= -1) //si no lo encuentra
	   {
	   		if(sta == 0){
	   			document.getElementById("estado").value = 0;
		   		document.getElementById("toggle_small_8").checked = false;
		   document.getElementById("toggle_small_9").checked = false;
		   document.getElementById("toggle_small_10").checked = false;
		   document.getElementById("toggle_small_11").checked = false;
	   		}
		   else
		   {
			   document.getElementById("toggle_small_7").checked = false;
			   valor = valor.replace(/0/g, '');
			   document.getElementById("estado").value = valor;
			   valor += estado;
			   document.getElementById("estado").value += estado;
		   }
	   }

   }else {
	   //alert(sta);
	   var valor = document.getElementById("estado").value;
	   var estado = '' + sta;
	   //alert(valor);
	   if (valor.indexOf(estado) > -1) //si lo encuentra
	   {
		   if (sta == 0) {
			   valor = valor.replace(/0/g, '');
			   document.getElementById("estado").value = valor;
		   }
		   if (sta == 1) {
			   valor = valor.replace(/1/g, '');
			   document.getElementById("estado").value = valor;
		   }
		   if (sta == 2) {
			   valor = valor.replace(/2/g, '');
			   document.getElementById("estado").value = valor;
		   }
		   if (sta == 3) {
			   valor = valor.replace(/3/g, '');
			   document.getElementById("estado").value = valor;
		   }
		   if (sta == 4) {
			   valor = valor.replace(/4/g, '');
			   document.getElementById("estado").value = valor;
		   }

	   }

	   //document.getElementById("estado").value = estado;

   }
   }
   </script>
 </body>
</html>