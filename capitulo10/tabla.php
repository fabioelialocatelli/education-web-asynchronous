<?php header('Content-type: text/html; charset=iso-8859-1'); ?>

<?php
$conexion = mysqli_connect("localhost", "root", "", "bayer");
mysqli_set_charset($conexion, "utf8");

$estrellasDragon = "SELECT 
    *
FROM
    bayer.stellarParameters
WHERE
    designation LIKE '%Draconis';";

$ejecucionQuery = mysqli_query($conexion, $estrellasDragon);
?>

<table id="estrellas"><thead><tr><th>Nombre</th><th>Identificador</th><th>Diametro Solar</th><th>Luminosidad Absoluta</th><th>Luminosidad Bolometrica</th></tr></thead>
    <tbody>    
        <?php
        while ($registro = mysqli_fetch_array($ejecucionQuery)) {
            ?>
            <tr><td><?php echo($registro[0]); ?></td>
                <td><?php echo($registro[1]); ?></td>
                <td><?php echo($registro[2]); ?></td>
                <td><?php echo($registro[3]); ?></td>
                <td><?php echo($registro[4]); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>