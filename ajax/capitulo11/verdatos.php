<?php header('Content-type: text/html; charset=utf8'); ?>

<?php
$conexion = mysqli_connect("localhost", "root", "", "viajes");
mysqli_set_charset($conexion, "utf8");

$sel = "SELECT * FROM " . $_POST["tabla"];
$exec = mysqli_query($conexion, $sel);
?>
<table>
    <thead>
        <tr>
            <?php
            while ($campo = mysqli_fetch_field($exec)) {
                ?>
                <td><?php echo($campo->name); ?></td>
            <?php } ?>
        </tr>
    <thead>
    <tbody>
        <?php while ($registro = mysqli_fetch_row($exec)) { ?>
            <tr>
                <?php for ($i = 0; $i < (count($registro)); $i++) { ?>
                    <td><?php echo($registro[$i]); ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>