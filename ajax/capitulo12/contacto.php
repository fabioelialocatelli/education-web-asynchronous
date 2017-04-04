<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulario Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script language="javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>

        <!--Plugin-->        
        <link type="text/css" media="screen" href="darkhive/jquery-ui.css" rel="Stylesheet" />
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>


        <script language="javascript">
            $(document).ready(function () {

                /*var nombres = [
                 "Juan",
                 "Jose",
                 "Antonio",
                 "Marc",
                 "Javier",
                 "María",
                 "Marta",
                 "Laia",
                 "Alba"
                 ];*/

                $("#nombre").autocomplete({source: "nombres.php"});
                $.datepicker.regional['es'] = {
                    closeText: 'Cerrar',
                    prevText: '<Ant',
                    nextText: 'Sig>',
                    currentText: 'Hoy',
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                    weekHeader: 'Sm',
                    dateFormat: 'dd/mm/yy',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''
                };
                $('#cita').datepicker($.datepicker.regional["es"]);
                $('#submitButton').click(function () {
                    verDatos();
                });
            });
            function verDatos() {
                var Texto;
                Texto = "Nombre: " + $('#nombre').val();
                Texto += "<br>Email: " + $('#email').val();
                Texto += "<br>Asunto: " + $('#asunto').val();
                Texto += "<br>Fecha: " + $('#cita').val();
                $('#capaDialog').html(Texto);
                $('#capaDialog').dialog({

                    height: 200,
                    closeOnEscape: false,
                    resizable: true,
                    title: 'Datos Formulario',

                    buttons: {'Cerrar': function () {
                            $(this).dialog('close');
                        }},
                    beforeClose: function () {
                        alert('En breve nos pondremos en contacto');
                    }
                });
            }
        </script>
    </head>
    <body>
        <div id="capaDialog" title="Dialog"></div>

        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <label for="nombre">Tu nombre:</label><br />
            <input id="nombre" name="nombre" type="text" value="" size="30" /><br />
            <label for="email">Tu email:</label><br />
            <input id="email" name="email" type="text" value="" size="30" /><br />
            <label for="asunto">Tu mensaje:</label><br />
            <textarea id="asunto" name="asunto" rows="7" cols="30"></textarea><br />
            <label for="cita">Seleccione fecha para concertar visita:</label><br />
            <input id="cita" name="cita" type="text" value="" size="30" /><br />
            <input id="submitButton" type="button" value="Enviar" />
        </form>						
    </body>
</html>
