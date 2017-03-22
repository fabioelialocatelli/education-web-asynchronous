<?php

$letras = $_REQUEST["term"];
$conexion = mysqli_connect("localhost", "root", "", "ajax");
$sel = "SELECT * FROM usuarios WHERE user LIKE '%" . $letras . "%'";
$exec = mysqli_query($conexion, $sel);
//Creamos en result el array que devolveremos
$result = "[";
while ($registro = mysqli_fetch_array($exec)) {
    $result .= "\"" . $registro[0] . "\",";
}
//Sustituimos la coma despues de la última palabra por el corchete de cierre
$result[strlen($result) - 1] = "]";
//Mostramos el array generado que es lo que recibirá el control autocomplete
echo ($result);
