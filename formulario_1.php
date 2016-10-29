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
  	<div class="back-button"><a href="index.php"><div class="rpicon-back"></div></a></div>
    <div class="title_header"><h1>

			Bienvenido
<<<<<<< HEAD

		</h1></div>

  </div>
=======
			<?php
			/*if($_REQUEST['rut']) {
				$rut = $_REQUEST['rut'];
				$sql = 'SELECT * FROM personas WHERE rut = ' . $rut;
				$resultado = mysql_query($sql, $enlace);

				if (!$resultado) {
					echo "Error de BD, no se pudo consultar la base de datos\n";
					echo "Error MySQL:" . mysql_error();
					exit;
				}

				while ($fila = mysql_fetch_assoc($resultado)) {
					echo $fila['nombre'];
				}

				mysql_free_result($resultado);
			}else{
				echo "Error";
			}*/
			?>
>>>>>>> origin/mesh-redport

  <div class="container">

  <h1 id="title_form">Indique a la persona</h1>

  <div class="markers" >
    <input type="radio" name="estate" id="checkbox_big_1" class="marker" onclick="checkType(this,0)"/>
    <label for="checkbox_big_1" class="rpicon-toggle-small-inverse"><div class="rpicon-landslide"></div><p class="text_marker"><br>Menor</p></label>
    <input type="radio" name="estate" id="checkbox_big_2" class="marker" onclick="checkType(this,1)"/>
    <label for="checkbox_big_2" class="rpicon-toggle-small-inverse"><div class="rpicon-cut-bridge"></div><p class="text_marker"><br>Adulto</p></label>
    <input type="radio" name="estate" id="checkbox_big_3" class="marker" onclick="checkType(this,2)"/>
    <label for="checkbox_big_3" class="rpicon-toggle-small-inverse"><div class="rpicon-fire"></div><p class="text_marker"><br>3ª Edad</p></label>
    <input type="radio" name="estate" id="checkbox_big_4" class="marker" onclick="checkType(this,3)"/>
    <label for="checkbox_big_4" class="rpicon-toggle-small-inverse"><div class="rpicon-landslide"></div><p class="text_marker"><br>Especial</p></label>
  </div>
</div>


<div id="container_p2" class="container">
	<div class="form_container">
		<h1 id="title_form">¿Te encuentras bien?</h1>
		<div class="toggle_button">
		<input type="checkbox" id="toggle" class="toggle_button_big" onclick="checkAddress(this,0)"/>
		<label for="toggle" class="rpicon-toggle"></label>
		</div>
	</div>

	<div class="form_content">

		<h1 id="title_form">Indica tu estado</h1>
		<div class="toggle_box">
		<div class="text_box">
			<input type="checkbox" id="toggle_small_1" class="toggle_button_small_2" onclick="checkAddress(this,1)"/>
			<label for="toggle_small_1" class="rpicon-toggle-small"><p class="texto-toggle">Estoy&nbsp;herido</p></label>
		</div>
		<div class="text_box">
			<input type="checkbox" id="toggle_small_2" class="toggle_button_small_2" onclick="checkAddress(this,2)"/>
			<label for="toggle_small_2" class="rpicon-toggle-small"><p class="texto-toggle">Estoy&nbsp;atrapado</p></label>
		</div>
		<div class="text_box">
			<input type="checkbox" id="toggle_small_3" class="toggle_button_small_2" onclick="checkAddress(this,3)"/>
			<label for="toggle_small_3" class="rpicon-toggle-small"><p class="texto-toggle">Enfermo&nbsp;crónico</p></label>
		</div>
		</div>
	</div>

</div>

<form action="agregar_estado_POST.php" class="login-rut" method="POST">
      <!--<form action="formulario_1.php" class="login-rut" method="POST">-->

      <input type="text" id="tipo" name="tipo" value="1">
      <input type="text" id="estado" name="estado" value="0">
      <input type="text" id="ip" name="ip" value="<?php echo $_REQUEST['rut']; ?>">
      <input type="text" id="detalle" name="detalle" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">
	  <input type="text" id="enlace" name="enlace" value="1">
      <!--<input class="button_rut" type="submit" text="Reportarme" />-->


<!--
<div class="container">

  	<h1 id="title_form">¿Están estas personas contigo?</h1>
	<div class="toggle_box">
		<div class="text_box_2">
		    <input type="checkbox" id="toggle_small_4" class="toggle_button_small"/>
		  	<label for="toggle_small_4" class="rpicon-toggle-small"><p class="texto-toggle">Carlos Aracena R.</p></label>
		 </div>
		<div class="text_box_2">
			<input type="checkbox" id="toggle_small_5" class="toggle_button_small"/>
		  	<label for="toggle_small_5" class="rpicon-toggle-small"><p class="texto-toggle">María Fernandez S.</p></label>
		</div>
  </div>

  <h1 id="title_form">¿Se encuentran bien?</h1>
	<div class="toggle_box">
		<div class="text_box_2">
			<input type="checkbox" id="toggle_small_6" class="toggle_button_small"/>	
		  	<label for="toggle_small_6" class="rpicon-toggle-small"><p class="texto-toggle">Carlos Aracena R.</p></label>
		</div>
  </div>

    
</div>-->

<div class="container">

  <h1 id="title_form">¿Hay otras personas contigo?</h1>
  	<ul class="name_list">
  		<div class="list_box">
			<?php
<<<<<<< HEAD
=======
/*
>>>>>>> origin/mesh-redport

			if($_REQUEST['rut']) {
				$rut = $_REQUEST['rut'];
				$sql = 'SELECT tipo FROM familia WHERE familiar = ' . ip2long($rut);
				$resultado = mysql_query($sql, $enlace);

				if (!$resultado) {
					echo "Error de BD, no se pudo consultar la base de datos\n";
					echo "Error MySQL:" . mysql_error();
					exit;
				}

				while ($fila = mysql_fetch_assoc($resultado)) {
					$array[] = $fila;

					//echo $fila['nombre'];
				}

				mysql_free_result($resultado);
			}else{
				echo "Error";
			}*/


			//$array = array(1, 2, 3, 4);
			/*foreach ($array as &$valor) {
				$valor = $valor * 2;
			}*/
			// $array ahora es array(2, 4, 6, 8)

			// sin unset($valor), $valor aún es una referencia al último elemento: $array[3]
/*
			foreach ($array as $clave) {
				// $array[3] se actualizará con cada valor de $array...
				echo '<div class="text_box_2">';
				echo '<li>';
				if($clave['tipo'] == 0){ echo "Menor"; }
				elseif($clave['tipo'] == 1){ echo "Adulto"; }
				elseif($clave['tipo'] == 2){ echo "3ª Edad"; }
				else{ echo "Especial"; }
				echo '</li>';
				echo '</div>';

				//echo "{$clave}";
				//print_r($array);
			}
			// ...hasta que finalmente el penúltimo valor se copia al último valor

			// salida:
			// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
			// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
			// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
			// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )*/
			?>

		</div>
	</ul>

<div class="toggle_box">
  <div class="text_box_3">
		<p id="text_button ">Agregar otra persona</p>

<button class="button_ip rpicon-more" type="submit">+</button>
	  <!--<a href="agregar_estado_para_personas_POST.php">
		  <div class="button_small_two"><div class="rpicon-more"></div></div>
	  </a>-->


		<!--<a href="agregar_persona.php"><div class="button_small_two"><div class="rpicon-more"></div></div></a>-->
	</div>
</div>
</div>
<button class="button_ip" type="submit">Terminado</button>
</form>

<!--<a class="button" href="home.php?rut=<?php echo $_REQUEST['rut'];?>">Terminado</a>-->


<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/main.js"></script>

 </body>
 <script>
	   //var estado+"";
	   function checkType(radio,sta)
	   {
	   	if(radio.checked){
	   		var valorT = document.getElementById("tipo").value;
	   		document.getElementById("tipo").value = sta;
	   	}
	   }
	   </script>
	   <script>
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
		   		document.getElementById("toggle_small_1").checked = false;
		   		document.getElementById("toggle_small_2").checked = false;
		   		document.getElementById("toggle_small_3").checked = false;
	   		}
		   else
		   {
			   document.getElementById("toggle").checked = true;
			   valor = valor.replace(/0/g, '');
			   document.getElementById("estado").value = valor;
			   valor += estado;
			   document.getElementById("estado").value += estado;
		   }
	   }

   }else {
   	if(document.getElementById("toggle").checked == false)document.getElementById("estado").value = 0;
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
</html>