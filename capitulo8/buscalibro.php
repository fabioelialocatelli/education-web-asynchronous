<?php

require_once("jsonServices.php");
$conexion = mysqli_connect("localhost", "root", "", "bayer");
mysqli_set_charset($conexion, "utf8");

$cadena = "SELECT * FROM stellarParameters WHERE denomination='" . $_POST["nombreEstrella"] . "'";
$exec = mysqli_query($conexion, $cadena);

if (mysqli_affected_rows($conexion) > 0) {
    $vararray = mysqli_fetch_array($exec);
    $objetojson = new Services_JSON();
    $textojson = $objetojson->encode($vararray);
    echo($textojson);
} else
    echo('false');