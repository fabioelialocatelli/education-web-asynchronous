<?php 

header('Content-type: text/xml;'); 

$conexion = mysqli_connect("localhost", "root", "", "viajes");
$ofertas = "SELECT * FROM ofertas;";
$buscarOfertas = mysqli_query($conexion, $ofertas);

$documentoXML = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
$documentoXML .= "<ofertas>";

while ($ofertas = mysqli_fetch_array($buscarOfertas)) {
    
    $documentoXML .= "<hoteles>";
    $documentoXML .= "<hotel>" . $ofertas[1] . "</hotel>";
    $documentoXML .= "<días>" . $ofertas[2] . "</días>";
    $documentoXML .= "<precio>" . $ofertas[3] . "</precio>";    
    $documentoXML .= "<opiniones>";
    
    $opiniones = "SELECT * FROM opiniones WHERE hotel LIKE '" . $ofertas[1] . "';";
    
    $buscarOpiniones = mysqli_query($conexion, $opiniones);
    while ($resultadoOpiniones = mysqli_fetch_array($buscarOpiniones)) {
        $documentoXML .= "<opinion>" . $resultadoOpiniones[2] . "</opinion>";
    }
    $documentoXML .= "</opiniones>";    
    $documentoXML .= "</hoteles>";
}
$documentoXML .= "</ofertas>";

echo($documentoXML);