<?php header('Content-type: text/html; charset=utf8'); ?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "bayer");
mysqli_set_charset($conexion, "utf8");

$estrellaDragon = "SELECT 
    denomination,
    designation,
    identifierHD,
    identifierHIP,
    identifierSAO
FROM
    bayer.stellarIdentifiers
WHERE
    designation LIKE '%Draconis'
        AND denomination LIKE '" . $_GET["nombreEstrella"] . "';";

$ejecucionQuery = mysqli_query($conexion, $estrellaDragon);?>

<?php
if ($registro = mysqli_fetch_array($ejecucionQuery)) {
    ?>
    Nombre: <?php echo($registro[0]); ?><br>
    Identificador: <?php echo($registro[1]); ?><br>
    Identificador HD: <?php echo($registro[2]); ?><br>
    Identificador HIP: <?php echo($registro[3]); ?><br>
    Identificador SAO: <?php echo($registro[4]); ?><br>    
    <?php
}