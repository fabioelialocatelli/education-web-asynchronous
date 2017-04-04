<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$letra = $_POST["letra"];
if ($letra == 'D') {
    $html = "<dl><dt>dominó.</dt>";
    $html .= "<dd>Juego que se hace con 28 fichas rectangulares divididas en dos cuadrados, cada uno de los cuales lleva marcados de uno a seis puntos, o no lleva ninguno. Cada jugador pone por turno una ficha que tenga número igual en uno de sus cuadrados al de cualquiera de los dos que están en los extremos de la línea de las ya jugadas, y gana quien primero coloca todas las suyas o quien se queda con menos puntos, si se cierra el juego.</dd>";
    $html .= "<dd>Conjunto de las fichas que se emplean en este juego.</dd>";
    $html .= "<dd>Traje talar con capucha, que ya solo tiene uso en las funciones de máscaras.</dd>";
    $html .= "<dt>diatriba.</dt>";
    $html .= "<dd>Discurso o escrito violento e injurioso contra alguien o algo.</dd>";
    echo($html);
} else {
    echo("Letra no encontrada");
}