<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyectos Variados S.L.</title>
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <script language="javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>

        <link type="text/css" media="screen" href="jqueryui/jquery-ui.css" rel="Stylesheet" />
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        
        <script language="javascript">
            $(document).ready(function () {
                $('.footer').animate({backgroundColor: '#000'}, 5000);
                
                //Ejemplos requeridos solo para demonstrar las funcionalidades
                
                /*$('.footer').effect('explode', {pieces: 32}, 5000);
                $('ul').sortable({opacity:.7,cursor:'move',axis:'y'});*/
                
                $('.sidebar').accordion({"active": 1, "event": 'mouseenter'});
                $('.footer').resizable({stop: function () {
                        if ($(this).width() < 250)
                            $('.footer').hide();
                    }});
                $("#tabs").tabs({
                    heightStyle: "fill",
                    beforeLoad: function (event, ui) {
                        ui.jqXHR.fail(function () {
                            ui.panel.html("Error cargando la ficha.");
                        });
                    }
                });
            });
        </script>
    </head>
    <body>
        <header>
            <div class="head-image"><!--Imagen de cabecera-->
                <img src="proyectos/home.jpg">
            </div>
        </header>
        <!--Contenido del sitio-->
        <div class="fila">
            <!--Articulos-->
            <section class="contenido">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Inicio</a></li>
                        <li><a href="proyectos.html">Proyectos</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="error1.php">Página error</a></li>
                    </ul>
                    <div id="tabs-1">
                        <p>Sómos una de las empresas líderes dedicadas a prestar servicios de ingeniería y consultoría para diferentes sectores económicos y estratégicos.</p>
                    </div>
                </div>
            </section>
            <!--Sidebar derecho-->
            <aside class="sidebar">
                <h5><a href="#">Aeronáutica</a></h5>
                <div>
                    Trabajos para los principales fabricantes de aviones y sus proveedores en toda la ingeniería del ciclo de vida del producto.
                </div>
                <h5><a href="#">Automoción</a></h5>
                <div>
                    Ingeniería mecánica, diseño, ingeniería de vehículos, control de calidad y soporte logístico son algunas de los servicios que proporcionamos a nuestros clientes en todo el mundo.
                </div>
                <h5><a href="#">Naval</a></h5>
                <div>
                    Uso práctico de nuevas infraestructuras flotantes o el desarrollo de buques con impacto ecológico nulo.
                </div>
                <h5><a href="#">Plantas industriales</a></h5>
                <div>
                    Sector por excelencia de  la productividad donde la experiencia en el diseño marcará la instalación
                </div>
                <h5><a href="#">Energias renovables</a></h5>
                <div>
                    Durante los últimos 15 años hemos trabajado y participado en los proyectos más innovadores de la industria.
                </div>
            </aside>
        </div>
        <!--Footer-->
        <footer class="footer">
            <aside class="iconos">
                <img src="proyectos/ico_twitter.png">
                <img src="proyectos/ico_gmas.png">
                <img src="proyectos/ico_face.png">
            </aside>
            <p>
                Copyright © 2015 Proyectos Variados
            </p>   
        </footer>
    </body>
</html>
