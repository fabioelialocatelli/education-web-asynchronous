<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Proyectos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script language="javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link type="text/css" media="screen" href="estilos.css" rel="Stylesheet" />

        <link type="text/css" media="screen" href="darkhive/jquery-ui.css" rel="Stylesheet" />
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

        <script language="javascript">
            $(document).ready(function () {
                //Variables para controlar
                var contenido = $(".contenido", $("#infoSlider")); //Capa principal
                var elemento = $(".elemento", $("#infoSlider")); //Elemento de la capa

                //Tamaño de la capa general
                contenido.css("width", elemento.length * parseInt(elemento.css("width")));

                //Configuración del slider
                var sliderOpc = {
                    max: (elemento.length * parseInt(elemento.css("width"))) - parseInt($(".visor",
                            $("#infoSlider")).css("width")), slide: function (e, ui) {
                        contenido.css("left", "-" + ui.value + "px");
                    }
                };
                //Crea el slider
                $("#slider").slider(sliderOpc);
            });
        </script>
    </head>
    <body>
        <div id="infoSlider">
            <h2>Datos acerca de proyectos</h2>
            <div class="visor">
                <div class="contenido">
                    <div class="elemento">
                        <h2>Jardin</h2>
                        <img src="proyectos/pry1.jpg" alt="Jardín">
                        <dl class="details">
                            <dt>Año:</dt><dd>2013</dd>
                            <dt>Servicio prestado:</dt><dd>Diseño jardín con troncos reciclados</dd>
                        </dl>
                    </div>
                    <div class="elemento">
                        <h2>Salón Central</h2>
                        <img src="proyectos/pry2.jpg" alt="Salón">
                        <dl class="details">
                            <dt>Año:</dt><dd>2012</dd>
                            <dt>Servicio prestado:</dt><dd>Iluminación y distribución</dd>
                        </dl>
                    </div>
                    <div class="elemento">
                        <h2>Hotel Piramidal</h2>
                        <img src="proyectos/pry3.jpg" alt="Hotel">
                        <dl class="details">
                            <dt>Año:</dt><dd>2011</dd>
                            <dt>Servicio prestado:</dt><dd>Proyecto completo, diseño y construcción</dd>
                        </dl>
                    </div>
                    <div class="elemento">
                        <h2>Habitación</h2>
                        <img src="proyectos/pry4.jpg" alt="Habitación">
                        <dl class="details">
                            <dt>Año:</dt><dd>2015</dd>
                            <dt>Servicio prestado:</dt><dd>Diseñu y acabado</dd>
                        </dl>
                    </div>
                    <div class="elemento">
                        <h2>Comedor</h2>
                        <img src="proyectos/pry5.jpg" alt="Comedor">
                        <dl class="details">
                            <dt>Año:</dt><dd>2013</dd>
                            <dt>Servicio prestado:</dt><dd>Gestión iluminación y confort</dd>
                        </dl>
                    </div>
                    <div class="elemento">
                        <h2>Casa</h2>
                        <img src="proyectos/pry6.jpg" alt="Casa">
                        <dl class="details">
                            <dt>Año:</dt><dd>2014</dd>
                            <dt>Servicio prestado:</dt><dd>Diseño y construción, gestión energética</dd>
                        </dl>
                    </div>
                    <div class="elemento">
                        <h2>Escalera</h2>
                        <img src="proyectos/pry7.jpg" alt="Escalera">
                        <dl class="details">
                            <dt>Año:</dt><dd>2010</dd>
                            <dt>Servicio prestado:</dt><dd>Gestión aguas fluviales</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div id="slider"></div>
        </div>
    </body>
</html>
