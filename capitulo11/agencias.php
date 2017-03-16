<?php
if (isset($_POST["usuario"])) {
    //Si recibimos el nombre de usuario realizamos la comprobación
    $conexion = mysqli_connect("localhost", "root", "", "viajes");
    $sel = "SELECT * FROM agencia WHERE id='" . $_POST["usuario"] . "' AND pass = '" . $_POST["pass"] . "'";
    $exec = mysqli_query($conexion, $sel);
    if (mysqli_num_rows($exec) > 0) {
        //Si los datos son correctos mostramos las opciones
        ?>
        <input type="button" onclick="accion('ofertas')" value="Añadir ofertas" /><br>
        <input type="button" onclick="accion('destinos')" value="Añadir destinos" /><br>
        <input type="button" onclick="accion('hoteles')" value="Añadir hoteles" />
        <input type="button" onClick="borrar()" value="Borrar" />
        </ul>
        <?php
    } else {
        echo("Agencia no encontrada, o contraseña incorrecta.");
    }
    ?>
    <?php
} else {
//Formulario para solicitar datos de acceso
    ?>
    <form id="form1" name="form1">
        Usuario:
        <input name="user" type="text" id="user" size="10" maxlength="10" />
        Contraseña: 
        <input name="pass" type="password" id="pass" size="10" maxlength="10" />
        <input type="button" onclick="controlpass(user, pass)" value="Comprobar" />
    </form>
    <?php
}
?>