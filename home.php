<?php
include "conUCV.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>redport</title>
  <!--Estilos css (sass)-->
  <link rel='stylesheet' type='text/css' href='sass/main.css' />
  <!--Familia tipográfica Roboto (google fonts)-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <!--familia de íconos-->
   <link href="https://file.myfontastic.com/KHbqgc9xxoCbZJYRdioaqd/icons.css" rel="stylesheet">
   <link rel='stylesheet' type='text/css' href='sass/styles.css' />
   <!--api de mapbox-->
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.css' rel='stylesheet' />
</head>
 <body>
   <div class="pagina_test">
   <!-- ======= header======= -->
  <div class="header">
    <div class="message-button"><a href="mensajes.html"><div class="rpicon-message"></div></a></div>
    <div class="title_header"><div class="logo">
    <img src="img/Logo_redport_web.png" alt="logo_redport">
  </div></div>
    <div class="menu-button"><a href="#"><div class="rpicon-menu"></div></a></div>
   <!-- <div class="back-button"><a href="formulario_1.html"><div class="rpicon-back"></div></a></div>-->
    <!--<div class="message-button"><a href="mensajes.html"><div class="rpicon-message"></div></a></div>-->
    
   <!--<div class="navbar">
      <ul class="navbar_content">
        <a href="reportar.html" class="navbar-button"><li>Reporte</li></a>
        <a href="estado_hogar.html" class="navbar-button"><li>Hogar</li></a>
        <a href="reportar_entorno.html" class="navbar-button"><li>Entorno</li>
      </ul>
    </div>-->
  </div>

    <nav class="menu_nav">
      <ul>
        <li><a href="home.html">Inicio</a></li>
        <li><a href="reportar.html">reportar</a></li>
        <li><a href="home.html#mi_ficha">mi ficha</a></li>
        <li><a href="estado_hogar.html">hogar</a></li>
        <li><a href="reportar_entorno.html">entorno</a></li>
        <li><a href="home.html#reportes">últimos reportes</a></li>
      </ul>

    </nav>

<div class="container_search">
    <form action="">
      <a href="resultados_busqueda.html" class="rpicon-search"></a>
      <input class="input_search" type="text" placeholder="Buscar a alguien" id="search_1">
      <label for="search_1"></label>
    </form>
  </div>

<div class="event_box_red">
  <h1>Alerta roja por sismo</h1>
  <div class="event_content">
  <div class="number_box_red">
    <p id="numero">7.5º</p>
  </div>
  <div class="table">
      <table>
        <tr>
          <td class="celda"><p class="table_text">Fecha:</p></td>
          <td><p class="table_text">10 Marzo 2016</p></td>
        </tr>
        <tr>
          <td class="celda"><p class="table_text">Hora:</p></td>
          <td><p class="table_text">21:30 pm</p></td>
        </tr>
        <tr>
          <td class="celda"><p class="table_text">Lugar:</p></td>
          <td><p class="table_text">Región de los Ríos</p></td>
        </tr>
        <tr>
          <td class="celda"><p class="table_text">Intensidad:</p></td>
          <td><p class="table_text">VII</p></td>
        </tr>
      </table>
  </div>
</div>
  <div class="container_button">
     <a id="btn_display" class="button_two_event" href="#">Ver alertas</a>
    <a class="button_two_event" href="eventos.html">ver registro</a>
       
</div>

<div id="display_content" class="effects">
      <!--<div class="effect">
      <div class="rpicon-tsunami"></div>
    </div>
    <div class="effect">
      <div class="rpicon-rupture-home"></div>
  </div>-->

  <h1 id="title_form">Alertas</h1>

  <div class="alert">
    <span class="alert_date">20-sept</span><span class="alert_hour">20:35 pm</span><p class="alerts">ONEMI estableció evacuación preventiva en el borde costero de las regiones con mayores intensidades.</p>
    <span class="alert_date">20-sept</span><span class="alert_hour">20:35 pm</span><p class="alerts">a las 20:55 horas el SHOA declaró ALERTA de Tsunami, la cual se extendió a todo el borde costero del país, junto con ello entregó el tren de olas el que se continúa monitoreando.</p>
    <span class="alert_date">20-sept</span><span class="alert_hour">20:35 pm</span><p class="alerts">Et omnesque delectus eum, vis alterum eleifend ad. Sit ceteros sapientem quaerendum no. Eu duo populo vituperata. </p>
  </div>
</div>
</div>

<div class="container">
  <h1>Indicadores ambientales</h1>


  <div class="indicators">

  <?php

  $shots = mysql_query("SELECT id,tipo,valor,fecha FROM mesh_redport.sensores ORDER BY id DESC LIMIT 3;") or die(mysql_error());

  while($row = mysql_fetch_assoc($shots)) { ?>
    <div class="indicator">
      <?php
        if($row["tipo"] == "Temperatura"){
          echo "<div class='rpicon-temperature'></div>";
        }else if($row["tipo"] == "UV"){
          echo "<div class='rpicon-uv'></div>";
        }else if($row["tipo"] == "Humedad"){
          echo "<div class='rpicon-humedity'></div>";
        }

      if($row["tipo"] == "Temperatura"){
        echo "<p class='text_indicator'>".round($row['valor'])."°C</p>";
      }else if($row["tipo"] == "UV"){

        if(round($row["valor"]) <= 2){
          echo "<p class='text_indicator' style='color:#41ab4b;'>BAJO</p>";
        }else if(round($row["valor"]) <= 5){
          echo "<p class='text_indicator' style='color:orange;'>MEDIO</p>";
        }else if(round($row["valor"]) <= 7){
          echo "<p class='text_indicator' style='color:orangered;'>ALTO</p>";
        }else if(round($row["valor"]) <= 10){
          echo "<p class='text_indicator' style='color:#f71138;'>MUY ALTO</p>";
        }else if(round($row["valor"]) >= 11){
          echo "<p class='text_indicator' style='color:#7a58dc;'>EXTREMO</p>";
        }
      }else if($row["tipo"] == "Humedad"){
        echo "<p class='text_indicator'>".round($row['valor'])."%</p>";
      }


      if($row["tipo"] == "UV"){
        //echo "<span class='text_uv'>uv</span>";
        echo "<div class='bar_background'></div>";
        echo "<div class='bar_uv' style='width: ".(abs($row['valor']*100)+10)."%;'></div>";
      }else if($row["tipo"] == "Temperatura"){
        echo "<div class='bar_background'></div>";
        echo "<div class='bar_t' style='width: ".(abs($row['valor'])/50*75)."%;'></div>";
      }else if($row["tipo"] == "Humedad"){
        echo "<div class='bar_background'></div>";
        echo "<div class='bar_h' style='width: ".(abs($row['valor'])/100*75)."%;'></div>";
      }

      ?>
      <!--<p class="text_indicator">soleado</p>
      <span class="text_uv">uv</span>
      <div class="bar_uv_background"></div>
      <div class="bar_uv"></div>-->
    </div>

    <!--<div class="feedbody">
      <div class="title"><?php echo $row["valor"]; ?></div>
      <div class="feed-data">: gets a pass from <span><?php echo $row["tipo"]; ?></span> and he takes a shot!</div>
    </div>-->
  <?php } ?>
    

  </div>
</div>

<div class="container" id="mi_ficha">
 <a class="button_edit" href="#"><div class="rpicon-edit"></div></a>
  <div class="edit_title"><h1 class="title-icon">Ficha de información</h1></div>
<div class="perfil_persona">
  <div class="usuario_personal"><div class="rpicon-user-good"></div></div>
  <p id="nombre_personal">Gloria Aracena</p>
</div>
  <h2>Te encuentras con</h2>
    <ul class="name_list">
      <div class="list_box">
        <div class="text_box_2">
          <li>Carlos Aracena R.</li>
        </div>
        <div class="text_box_2">
          <li>María Fernandez S.</li>
        </div>
      </div>
    </ul>

<div class="toggle_box">
  <div class="text_box_3">
  <p id="text_button">Agregar otra persona</p>
  <a href="agregar_persona.html"><div class="button_small_two"><div class="rpicon-more"></div></div></a>
</div>
</div>

  <h2>Buscas a</h2>
    <ul class="name_list">
      <div class="list_box">
        <div class="text_box_2">
          <li>nombre_apellido1</li>
        </div>
      </div>
    </ul>


  <div class="toggle_box">
  <div class="text_box_3">
  <p id="text_button">Buscar otra persona</p> 
  <a href="#"><div class="button_small_two"><div class="rpicon-more"></div></div></a>
  </div>
  </div>
  </div>

  <div id="hogar" class="container">
    <a class="button_edit" href="estado_hogar.html"><div class="rpicon-edit"></div></a>
    <div class="edit_title"><h1 class="title-icon">Estado de mi hogar</h1></div>
    <div class="home-icon-container"><div class="rpicon-home"></div></div>
    <h2 class="texto_vivienda">Casa</h2>

  <ul class="name_list">
    <div class="list_box">
      <div class="text_box_2">
        <li>Daño menor</li>
      </div>
      <div class="text_box_2">
        <li>Sin fugas</li>
      </div>
      <div class="text_box_2">
        <li>No necesita albergue</li>
      </div>
    </div>
  </ul>
  </div>

  <div class="container">
   <div class="map_people">
     <p id="texto_mapa">100 personas reportadas</p>
     <a class="button_two" href="personas_reportadas.php?rut=<?php echo $_REQUEST['rut'];?>">ver más</a>
   </div>
   <div class="map">
      
      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3345.0698151437036!2d-71.58095672261143!3d-33.02829109958188!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1468279338455" width="347" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    <!--Mapbox screenshot-->
      <!--<img class="map_content" src="https://api.mapbox.com/styles/v1/cleudio/ciqiooxr70000bjm0krbou6i0/static/-71.579739,-33.029077,12.96,-9.96,30.00/347x250?access_token=pk.eyJ1IjoiY2xldWRpbyIsImEiOiJjaWkxNmUyeGIwMDM5dDNrZnI1N2Y1eGxrIn0.gZNnFCWNxfxUD50feHVsyg" width="347" height="250" alt="Dark" />-->
      <a class="button_two_map" href="reportar_entorno.html">Reporta tu entorno</a>
      <div id='map' style='width: 347px; height: 250px;'></div>

        <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiY2xldWRpbyIsImEiOiJjaXIxb3o2NTUwMDNvOWhrcTVwaGRudG0xIn0.ve3cEnjZjNjqpYw_hju_cQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/cleudio/ciqiooxr70000bjm0krbou6i0',
            center: [-71.601162, -33.017948],
            zoom: 10
        });
        </script>

   </div>
</div>

  <div class="container" id="reportes">
    <h1><a name="reportes">Últimos reportes</a></h1>

<!-- caja de comentarios -->
    <div class="container_report">
      <ul id="reports_list" class="container_reports">
        <li>
          <a href="ficha_persona.html">
            <div class="user_avatar"><div class="rpicon-user-bad-small"></div></div>
            <div class="comment_box">
           
                <div class="username">
                <h2 id="name" class="username">Bárbara Mora R.</h2>
            </a>
                <span class="comment_date">5 min</span>
              <div class="comment_content"><p class="comment">Et omnesque delectus eum, vis alterum eleifend ad. Sit ceteros sapientem quaerendum no. Eu duo populo vituperata.</p></div>
              </div>
            </div>
         
        </li>
      </ul>
    </div>
    <div class="container_report">
      <ul id="reports_list" class="container_reports">
        <li>
          <div class="user_avatar"><div class="rpicon-user-good-small"></div></div>
            <div class="comment_box">
              
                <div class="username">
                <h2 id="name" class="username">Andrea Farías C.</h2>
                <span class="comment_date">10 min</span>
              <div class="comment_content"><p class="comment">Et omnesque delectus eum, vis alterum eleifend ad. Sit ceteros sapientem quaerendum no. Eu duo populo vituperata.</p></div>
              </div>

            </div>
            
        </li>
      </ul>
    </div>
    <div class="container_report">
      <ul id="reports_list" class="container_reports">
        <li>
            <div class="user_avatar"><div class="rpicon-user-good-small"></div></div>
            <div class="comment_box">

              <div class="username">
              <h2 id="name" class="username">Alfredo Rojas F.</h2>
              <span class="comment_date">20 min</span>
            <div class="comment_content"><p class="comment">Et omnesque delectus eum, vis alterum eleifend ad. Sit ceteros sapientem quaerendum no. Eu duo populo vituperata.</p></div>
            </div>


            </div>
            
        </li>
      </ul>
<!-- botón ver más reportes-->
     <div class="button_more">
       <a href="#" class="text_button_more">ver más reportes<div class="rpicon-down"></div></a>
     </div>
    </div>
  </div>

  </div>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/main.js"></script>
 </body>
</html>