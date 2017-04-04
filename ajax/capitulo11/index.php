<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <LINK REL=StyleSheet HREF="estilos.css" TYPE="text/css">
        <title></title>
        <script language="javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script language="javascript" src="funciones.js"></script>
        <script language="javascript">
            $(document).ready(function() {
                crearMenu();
                crearCarrusel();
                $('<img/>').addClass('ampliada').hide().appendTo('body');
                $('<div/>').addClass('detallesampliados')
                    .css('opacity',0.6)
                    .css('display','none')
                    .appendTo('body');
                });
        </script>
    </head>
    <body>
        <div id="contenedor">
          <div id="cabecera">
              <ul><li class="mano" onclick="solicitapass()">AGENCIAS</li>
                  <li class="mano" onclick="solousuarios()">USUARIOS</li>
              </ul>
          </div>
          <div id="menu">
            <ul>
            <li>DESTINOS</li>
            <li>HOTELES</li>
            <li>OFERTAS</li>
            <li>RESERVAS</li>
            </ul>
          </div>
          <div id="contenido">
            <div id="principal">
            </div>
            <div id="secundario">
            </div>
          </div>
          <div id="pie">
          </div>
        </div>
        
        
    <div id="ciudades">
        <div class="imagenes">
            <a href="carrusel/Barcelona1.jpg" title="Barcelona1">
            <img src="carrusel/Barcelona1.jpg" width="120" height="140" alt="Barcelona1" />
            <span class="detalle">Panoramica</span>
            </a>
            <a href="carrusel/Barcelona2.jpg" title="Barcelona2">
            <img src="carrusel/Barcelona2.jpg" width="120" height="140" alt="Barcelona2" />
            <span class="detalle">Sagrada Familia</span>
            </a>
            <a href="carrusel/Roma1.jpg" title="Roma1">
            <img src="carrusel/Roma1.jpg" width="120" height="140" alt="Roma1" />
            <span class="detalle">Fontana di Trevi</span>
            </a>
            <a href="carrusel/Roma2.jpg" title="Roma2">
            <img src="carrusel/Roma2.jpg" width="120" height="140" alt="Roma2" />
            <span class="detalle">Coliseum</span>
            </a>
            <a href="carrusel/Paris1.jpg" title="Paris1">
            <img src="carrusel/Paris1.jpg" width="120" height="140" alt="Paris1" />
            <span class="detalle">Torre Eiffel</span>
            </a>
            <a href="carrusel/Paris2.jpg" title="Paris2">
            <img src="carrusel/Paris2.jpg" width="120" height="140" alt="Paris2" />
            <span class="detalle">Panoramica</span>
            </a>
            <a href="carrusel/Madrid1.jpg" title="Madrid">
            <img src="carrusel/Madrid1.jpg" width="120" height="140" alt="Madrid1" />
            <span class="detalle">Noche</span>   
            </a>
            <a href="carrusel/Madrid2.jpg" title="Madrid2">
            <img src="carrusel/Madrid2.jpg" width="120" height="140" alt="Madrid2" />
            <span class="detalle">Palacio Real</span>
            </a>
            <a href="carrusel/Venecia.jpg" title="Venecia">
            <img src="carrusel/Venecia.jpg" width="120" height="140" alt="Venecia" />
            <span class="detalle">Canales</span>
            </a>
            </div>
 </div>
    </body>
</html>

