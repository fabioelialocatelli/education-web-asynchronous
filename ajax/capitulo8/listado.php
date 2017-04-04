<?php
$ruta = explode(".", $_POST["database"]);
$database = $ruta[0];
$tabla = $ruta[1];

$conexion = mysqli_connect("localhost", "root", "", $database);
mysqli_set_charset($conexion, "utf8");

$datos = "<table>";
$cadena = "SELECT * FROM " . $tabla;
$query = mysqli_query($conexion, $cadena);

while ($registro = mysqli_fetch_array($query)) {
    $datos .= "<tr>";
    $datos .= "<td>" . $registro[0] . "</td>";
    $datos .= "<td>" . $registro[1] . "</td>";
    $datos .= "<td>" . $registro[2] . "</td>";
    $datos .= "<td>" . $registro[3] . "</td>";
    $datos .= "</tr>";
}
$datos .= "</table>";
echo($datos);