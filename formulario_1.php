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


		</h1></div>

  </div>


<div class="container">
	<div class="form_container">
		<h1 id="title_form">¿Te encuentras bien?</h1>
		<div class="toggle_button">
		<input type="checkbox" id="toggle" class="toggle_button_big"/>
		<label for="toggle" class="rpicon-toggle"></label>
		</div>
	</div>

	<div class="form_content">

		<h1 id="title_form">Indica tu estado</h1>
		<div class="toggle_box">
		<div class="text_box">
			<input type="checkbox" id="toggle_small_1" class="toggle_button_small_2"/>
			<label for="toggle_small_1" class="rpicon-toggle-small"><p class="texto-toggle">Estoy&nbsp;herido</p></label>
		</div>
		<div class="text_box">
			<input type="checkbox" id="toggle_small_2" class="toggle_button_small_2"/>
			<label for="toggle_small_2" class="rpicon-toggle-small"><p class="texto-toggle">Estoy&nbsp;atrapado</p></label>
		</div>
		<div class="text_box">
			<input type="checkbox" id="toggle_small_3" class="toggle_button_small_2"/>
			<label for="toggle_small_3" class="rpicon-toggle-small"><p class="texto-toggle">Enfermo&nbsp;crónico</p></label>
		</div>
		</div>
	</div>

</div>
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
			}


			//$array = array(1, 2, 3, 4);
			/*foreach ($array as &$valor) {
				$valor = $valor * 2;
			}*/
			// $array ahora es array(2, 4, 6, 8)

			// sin unset($valor), $valor aún es una referencia al último elemento: $array[3]

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
		<p id="text_button">Agregar otra persona</p>

	  <a href="agregar_persona.php?rut=<?php echo $_REQUEST['rut'];?>">
		  <div class="button_small_two"><div class="rpicon-more"></div></div>
	  </a>


		<!--<a href="agregar_persona.php"><div class="button_small_two"><div class="rpicon-more"></div></div></a>-->
	</div>
</div>
</div>
<a class="button" href="home.php">Terminado</a>


<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/main.js"></script>

 </body>
</html>