/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var objetoAjax = false;
var objetoCapa;
var objetoDistancia;

function creaTabla(objetoJSON, luminosidadAbsoluta) {
    var tabla = "<TABLE><THEAD><TR><TH>NOMBRE</TH><TH>IDENTIFICADOR</TH><TH>DISTANCIA</TH></TR></THEAD><TBODY>";
    for (i = 0; i < objetoJSON.Estrellas.length; i++) {
        if (objetoJSON.Estrellas[i].absoluteLuminosity > luminosidadAbsoluta.value) {
            tabla += "<TR><TD>" + objetoJSON.Estrellas[i].denomination + "</TD>";
            tabla += "<TD>" + objetoJSON.Estrellas[i].designation + "</TD>";
            tabla += "<TD>" + objetoJSON.Estrellas[i].absoluteLuminosity + "</TD></TR>";
        }
    }
    tabla += "</TBODY></TABLE>";
    return tabla;
}
function mostrarInformacion() {
    var capaInformacion = document.getElementById(objetoCapa);
    var valorDistancia = document.getElementById(objetoDistancia);
    if (objetoAjax.readyState === 4)
        if (objetoAjax.status === 200) {
            var objetoJSON = JSON.parse(objetoAjax.responseText);
            capaInformacion.innerHTML = creaTabla(objetoJSON, valorDistancia);
        } else
            capaInformacion.innerHTML = "Error: " + objetoAjax.status;
    else
        capaInformacion.innerHTML = "Cargando......";
}

function crearAJAX(identificadorCapa, valorLuminosidad) {
    try {
        objetoAjax = new ActiveXObject("Msxml12.XMLHTTP");
    } catch (e) {
        try {
            objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            objetoAjax = false;
        }
    }
    if (!objetoAjax && typeof XMLHttpRequest !== "undefined") {
        objetoAjax = new XMLHttpRequest();
    }
    objetoCapa = identificadorCapa;
    objetoDistancia = valorLuminosidad;
    objetoAjax.onreadystatechange = mostrarInformacion;
    objetoAjax.open("GET", "json.json", true);
    objetoAjax.send();
}
