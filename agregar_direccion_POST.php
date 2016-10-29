<?php
/**
 * Created by PhpStorm.
 * User: Patri
 * Date: 02-10-2016
 * Time: 18:48
 */
include "conUCV.php";

$rut = $_REQUEST['rut'];
<<<<<<< HEAD
$lati = $_REQUEST['latitu'];
$longi = $_REQUEST['longitu'];
//$long = ip2long($rut);
$long = ip2long($rut);
=======
//$long = ip2long($rut);
$long = ip2long("10.30.61.202");
>>>>>>> origin/mesh-redport



$datenow = date("d/m/y - H:i:s");
<<<<<<< HEAD
$c1 = $lati;
$c2 = $longi;
$sql = 'INSERT INTO personas (registroIP,dateLogin, cord1, cord2,detalle) VALUES("'.$long.'","'.$datenow.'","'.$c1.'","'.$c2.'","'.$_SERVER['HTTP_USER_AGENT'].'")';
=======
$c1 = 0;
$c2 = 0;
$sql = 'INSERT INTO personas (registroIP,dateLogin, cord1, cord2) VALUES("'.$long.'","'.$datenow.'","'.$c1.'","'.$c2.'")';
>>>>>>> origin/mesh-redport
echo $sql;
$resultado = mysql_query($sql, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL:" . mysql_error();
    exit;

}

header("Location: formulario_1.php?rut=$rut");
die();

/*while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['nombre'];
}

mysql_free_result($resultado);*/
/*}else{
    echo "Error";
}*/

?>