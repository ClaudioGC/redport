<?php
/**
 * Created by PhpStorm.
 * User: Patri
 * Date: 02-10-2016
 * Time: 18:48
 */
include "conUCV.php";

$rut = $REQUEST['ip'];
$datenow = date("d/m/y - H:i:s");

$sql = "UPDATE personas SET tipo = '".$_REQUEST['tipo']."', estado = '".$_REQUEST['estado']."' WHERE registroIP = '".ip2long($rut)."' and detalle = '".$_REQUEST['detalle']."'";
$resultado = mysql_query($sql, $enlace);
echo $sql;
if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL:" . mysql_error();
    exit;

}
if($_REQUEST['enlace']==0){
	header("Location: home.php?rut=".$rut);
	die();
}else{
	header("Location: agregar_persona.php?rut=".$rut);
	die();
}


/*while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['nombre'];
}

mysql_free_result($resultado);*/
/*}else{
    echo "Error";
}*/

?>