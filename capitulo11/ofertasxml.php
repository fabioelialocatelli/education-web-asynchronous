<?php header('Content-type: text/xml;'); ?>
<?php

$conexion = mysqli_connect("localhost", "root", "", "viajes");
$sel = "SELECT * FROM OFERTAS";
$exec = mysqli_query($conexion, $sel);

$resultado = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
$resultado .= "<ofertas>";

while ($registro = mysqli_fetch_array($exec)) {
    $resultado .= "<hoteles><hotel>" . $registro[1] . "</hotel>";
    $resultado .= "<días>" . $registro[2] . "</días>";
    $resultado .= "<precio>" . $registro[3] . "</precio>";
    $resultado .= "<opiniones>";
    $sel2 = "SELECT * FROM opiniones WHERE Hotel Like '" . $registro[1] . "'";
    $exec2 = mysqli_query($conexion, $sel2);
    while ($registro2 = mysqli_fetch_array($exec2)) {
        $resultado .= "<op>" . $registro2[1] . "</op>";
    }
    $resultado .= "</opiniones></hoteles>";
}
$resultado .= "</ofertas>";
echo($resultado);