<?php header('Content-type: text/html; charset=iso-8859-1'); ?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "bayer");
mysqli_set_charset($conexion, "utf8");

$estrellaDragon = "SELECT 
    denomination, designation, solarDiameter
FROM
    bayer.stellarParameters
WHERE
    designation LIKE '%Draconis'
        AND denomination LIKE'" . $_GET["nombreEstrella"] . "'";
$ejecucionQuery = mysqli_query($conexion, $estrellaDragon);
?>
<?php
if ($registro = mysqli_fetch_array($ejecucionQuery)) {
    ?>
    Nombre: <?php echo($registro[0]); ?><br>
    Identificador: <?php echo($registro[1]); ?><br>
    Diametro Solar: <?php echo($registro[2]); ?><br>
    <?php
}