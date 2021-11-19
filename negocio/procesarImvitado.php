<?php
/*
        recoger datos de invitados segun el filtro, gestinar con bd y devolver [] "seguro"
    */
include_once "databaseManagement.inc.php";

session_start();

function seguro($valor)
{
    $valor = strip_tags($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}
function sesionComprobar()
{
    if (isset($_SESSION["aeroOrigen"]) && isset($_SESSION["aeroDestino"])) {
        $listaVuelos = obtenerVuelos();
    } elseif (isset($_SESSION["aeroOrigen"])) {
        $listaVuelos = consultaVuelosInvitadosLlegada(seguro($_POST["ciudad"]));
    } elseif (isset($_SESSION["aeroDestino"])) {
        $listaVuelos = consultaVuelosInvitadosSalida(seguro($_POST["ciudad"]));
    }
    return $listaVuelos;
}
if (count($_POST) > 0) {
    if (isset($_POST["aero"]["origen"])) {
        $_SESSION["aeroOrigen"] = 1;
    }
    if (isset($_POST["aero"]["destino"])) {
        $_SESSION["aeroDestino"] = 1;
    }
    sesionComprobar();
} else {
    sesionComprobar();
}
