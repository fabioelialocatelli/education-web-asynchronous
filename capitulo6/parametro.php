<html>
    <head>
        <title>Parametros PHP</title>
    </head>
    <body>
        <b>Nombre Completo: </b><?php echo($_POST["nombre"] . " " . $_POST["apellidos"]) ?><br>
        <b>Domicilio: </b><?php echo($_POST["direccion"]) ?><br>
        <b>Quiere Continuar: </b><?php echo($_POST["decision"]) ?><br>
    </body>
</html>