<?php header('Content-type: text/html; charset=utf8'); ?>
<?php
if (isset($_POST["pagina"]))
    $pagina = $_POST["pagina"];
else
    $pagina = $_GET["pagina"];
$conexion = mysqli_connect("localhost", "root", "", "viajes");
mysqli_set_charset($conexion, "utf8");

if (!isset($_GET["r0"])) {
    $sel = "SELECT * FROM " . $pagina;
    $exec = mysqli_query($conexion, $sel);
    $contador = 0;
    ?>
    <form id="formulario">
        <dl>
            <?php
            echo("<dt><strong> " . $pagina . "</strong></dt>");
            while ($campo = mysqli_fetch_field($exec)) {
                ?>
                <dd><?php echo($campo->name); ?>: <input type="text" name="r<?php echo($contador++); ?>"/></dd>
            <?php } ?>
        </dl>
        <input type="button" onclick="accion('<?php echo($pagina); ?>', 1)" value="Insertar"/>
        <input type="hidden" name="pagina" value="<?php echo($pagina); ?>" />
    </form>
    <?php
} else {
    if (strcmp($pagina, 'destinos') == 0)
        $sel = "INSERT INTO destinos VALUES('" . $_GET["r0"] . "','" . $_GET["r1"] . "','" . $_GET["r2"] . "')";
    if (strcmp($pagina, 'hoteles') == 0)
        $sel = "INSERT INTO hoteles VALUES('" . $_GET["r0"] . "'," . $_GET["r1"] . ",'" . $_GET["r2"] . "','" . $_GET["r3"] . "')";
    if (strcmp($pagina, 'ofertas') == 0)
        $sel = "INSERT INTO ofertas VALUES(" . $_GET["r0"] . ",'" . $_GET["r1"] . "'," . $_GET["r2"] . "," . $_GET["r3"] . ",'" . $_GET["r4"] . "')";
    $exec = mysqli_query($conexion, $sel);
    if ($exec)
        echo("<h2>Los datos se han sido guardados</h2>");
    else
        echo("<h2>ERROR: Los datos no se han podido introducir</h2>");
}
?>