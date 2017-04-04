<?php

$conexion = mysqli_connect("localhost", "root", "", "viajes");

//Funciona solo si desactivamos "Safe Update Mode"
$sel = "DELETE FROM " . $_POST["nombreTabla"] . " WHERE " . $_POST["nombreCampo"] . " LIKE '" . $_POST["dato"] . "';";
$exec = mysql_query($sel);
if ($exec) {
    echo("<h1>Información eliminada</h1>");
}