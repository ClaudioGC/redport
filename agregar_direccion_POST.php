<?php
/**
 * Created by PhpStorm.
 * User: Patri
 * Date: 02-10-2016
 * Time: 18:48
 */
include "conUCV.php";

$rut = $_REQUEST['rut'];
//$long = ip2long($rut);
$long = ip2long("10.30.61.202");



$datenow = date("d/m/y - H:i:s");
$c1 = 0;
$c2 = 0;
$sql = 'INSERT INTO personas (registroIP,dateLogin, cord1, cord2) VALUES("'.$long.'","'.$datenow.'","'.$c1.'","'.$c2.'")';
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