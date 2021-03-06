<?php
include "conUCV.php";



?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>redport</title>
  <!--Estilos css (sass)-->
  <link rel='stylesheet' type='text/css' href='sass/main.css' />
  <!--Familia tipográfica Roboto (google fonts)-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel= "stylesheet">
  <!--familia de íconos-->
  <link href="https://file.myfontastic.com/KHbqgc9xxoCbZJYRdioaqd/icons.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' href='sass/styles.css' />
  <!--api de mapbox-->
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.21.0/mapbox-gl.css' rel='stylesheet' />
</head>
 <body>
   <div class="pagina_esp">
   <!-- ======= header======= -->
  <div class="header2">
    <div class="logo">
    <img src="img/Logo_redport_web.png" alt="logo_redport">
  </div>
  </div>

<section class="content">

<div class="container_2">
  <a class="button_rut" href="#">
      Necesito ayuda urgente</a>
</div>

<div class="container">

  <h1 class="h1_inverse">REPÓRTATE</h1>
  <p class="p_inverse">Repórta tu estado para que puedas recibir <b>ayuda</b> o los demás sepan que <b>estás bien</b></p>
  <div class="input_rut">
  <label class="label_rut" for="rut" type="text">Ingresa tu rut</label>

  <form action="formulario_1.php" class="login-rut" method="POST">
    <input class="login-rut__box" type="text" id="rut" name="rut" placeholder="11.111.111-1" maxlength="12">
      <input class="button_rut" type="submit" />
  </form>
  </div>
 <!--<a class="button_rut" href="formulario_1.html">Ingresar</a>-->
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
        <a id="btn_display" class="button_two_event" href="#">ver alertas</a>
</div>

  <div id="display_content" class="effects">

 <!--   <div class="effect">
      <div class="rpicon-tsunami"></div>
    </div>
    <div class="effect">
      <div class="rpicon-rupture-home"></div>
  </div>-->

<h1 id="title_form">Alertas</h1>

  <div class="alert">
    <span class="alert_date">20-sept</span><span class="alert_hour">20:35 pm</span><p class="alerts">ONEMI estableció evacuación preventiva en el borde costero de las regiones con mayores intensidades.</p>
    <span class="alert_date">20-sept</span><span class="alert_hour">20:00 pm</span><p class="alerts">a las 20:55 horas el SHOA declaró ALERTA de Tsunami, la cual se extendió a todo el borde costero del país, junto con ello entregó el tren de olas el que se continúa monitoreando.</p>
    <span class="alert_date">20-sept</span><span class="alert_hour">18:25 pm</span><p class="alerts">Et omnesque delectus eum, vis alterum eleifend ad. Sit ceteros sapientem quaerendum no. Eu duo populo vituperata. </p>
  </div>
</div>
</div>

<div class="container">

   <div class="map_people">
     <p id="texto_mapa">100 personas reportadas</p>
     <a class="button_two" href="personas_reportadas.html">ver más</a>
   </div>

   <div class="map">
    <!--Google maps-->
      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3345.0698151437036!2d-71.58095672261143!3d-33.02829109958188!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1468279338455" width="347" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    <!--Mapbox screenshot-->
    <!--
      <img class="map_content" src="https://api.mapbox.com/styles/v1/cleudio/ciqiooxr70000bjm0krbou6i0/static/-71.579739,-33.029077,12.96,-9.96,30.00/347x250?access_token=pk.eyJ1IjoiY2xldWRpbyIsImEiOiJjaWkxNmUyeGIwMDM5dDNrZnI1N2Y1eGxrIn0.gZNnFCWNxfxUD50feHVsyg" width="347" height="250" alt="Dark" />-->
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

</section>
</div>

<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/main.js"></script>

 </body>
</html>