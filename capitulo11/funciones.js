/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Hacemos la petición AJAX para cargar la página en la capa
function mostrarContenido(pagina) {
    $('div #principal').load("verdatos.php", {'tabla': pagina});
}
//Preparamos el evento click de la lista de menú
function crearMenu() {
    $('div #menu li').each(function () {
    }).click(function (event) {
        mostrarContenido($(this).text());
    }).hover(function () {
        $(this).addClass('mano');
    }, function () {
        $(this).removeClass('mano');
    });
}
//Vaciado de capas
function solousuarios() {
    $('div #pie').text(" ");
    $('div #secundario').text(" ");
    $('div #principal').text(" ");
}
//Control de agencias, carga la página en la capa
function solicitapass() {
    $('div #pie').load("agencias.php");
}
function controlpass(user, pass) {
    $('div #secundario').load("agencias.php", {'usuario': user.value, 'pass': pass.value});
    user.value = "";
    pass.value = "";
}
function accion(pagina, opcion) {
    if (opcion == 1) {
        $('div #principal').load("insertar.php", $('#formulario').serialize());
    } else
        $('div #principal').load("insertar.php", {'pagina': pagina});
}

function inicioCiudades() {
    //Función que coloca las imágenes del carrusel
    var ciudades = $('#ciudades .imagenes a');
    ciudades.unbind('click mouseenter mouseleave');
    ciudades.eq(0).css('left', 0).click(function (event) {
        //Cuando hacen click en la imagen izquierda del carrusel
        ciudades.eq(0).animate({'left': ESPACIADO}, 'slow');
        ciudades.eq(1).animate({'left': ESPACIADO * 2}, 'slow');
        ciudades.eq(2).animate({'left': ESPACIADO * 3}, 'slow');
        ciudades.eq(ciudades.length - 1).css('left', -ESPACIADO)
                .animate({'left': 0}, 'slow', function () {
                    $(this).prependTo('#ciudades .imagenes');
                    inicioCiudades();
                });
        event.preventDefault();
    });
    ciudades.eq(0).hover(function () {
        iconoAnterior.appendTo(this).show();
    }, function () {
        iconoAnterior.hide();
    });
    ciudades.eq(2).css('left', ESPACIADO * 2).click(function (event) {
        //Cuando hacen click en la imagen derecha del carrusel
        ciudades.eq(0).animate({'left': -ESPACIADO}, 'slow', function () {
            $(this).appendTo('#ciudades .imagenes');
            inicioCiudades();
        });
        ciudades.eq(1).animate({'left': 0}, 'slow');
        ciudades.eq(2).animate({'left': ESPACIADO}, 'slow');
        ciudades.eq(3).css('left', ESPACIADO * 3)
                .animate({'left': ESPACIADO * 2}, 'slow');
        event.preventDefault();
    });
    ciudades.eq(2).hover(function () {
        iconoSiguiente.appendTo(this).show();
    }, function () {
        iconoSiguiente.hide();
    });
    ciudades.eq(1).css('left', ESPACIADO);
    ciudades.eq(1).click(function (event) {
        var info = $(this).find('.detalle').text();
        $('.detallesampliados').css({
            'right': ($('body').width() - 360) / 2,
            'top': 100
        });
        $('.detallesampliados').text(info).show();
        $('.ampliada').attr('src', $(this).attr('href'))
                .css({'left': ($('body').width() - 360) / 2,
                    'top': 100, 'width': 360, 'height': 444
                }).show().one('click', function () {
            $('.ampliada').fadeOut();
            $('.detallesampliados').text(info).hide();
        });
        event.preventDefault();
    });
    ciudades.eq(1).hover(function () {
        iconoLupa.appendTo(this).show();
    }, function () {
        iconoLupa.hide();
    });
}

var ESPACIADO = 140;
function crearCarrusel() {
    //función de define el carrusel

    $('#ciudades').css({
        'width': ESPACIADO * 3,
        'height': '166px',
        'overflow': 'hidden'
    });
    $('#ciudades').find('.imagenes a').css({
        'float': 'none',
        'position': 'absolute',
        'left': 1000
    });
    inicioCiudades();
}

function crearIconos(src) {
    var nuevaimagen = $('<img/>').attr('src', src)
            .addClass('control')
            .css('opacity', 0.8)
            .css('display', 'none');
    return nuevaimagen;
}

var iconoAnterior = crearIconos('carrusel/anterior.gif');
var iconoSiguiente = crearIconos('carrusel/siguiente.gif');
var iconoLupa = crearIconos('carrusel/lupa.gif');

function borrar() {
    $('div #principal').load("borrar.html");
}
function borrar2() {
    vtabla = $('#tabla').attr('value');
    vcampo = $('#campo').attr('value');
    vdato = $('#dato').attr('value');
    $('div #principal').load("borrar.php", {'tabla': vtabla, 'campo': vcampo, 'dato': vdato});
}