<?php
/*
        recoger datos de invitados segun el filtro, gestinar con bd y devolver [] "seguro"
    */
include_once "../persistencia/databaseManagement.inc.php";

session_start();
$error="";
function seguro($valor)
{ 
    $valor = strip_tags($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}
function sesionComprobar()
{
    $listaVuelos=[];
    if (isset($_SESSION["aeroOrigen"]) && isset($_SESSION["aeroDestino"])) {
        $listaVuelos = obtenerVuelos();
        var_dump($listaVuelos); 
   } elseif (isset($_SESSION["aeroOrigen"])) {
        $listaVuelos = consultaVuelosInvitadosLlegada(seguro($_POST["ciudad"]));
    } elseif (isset($_SESSION["aeroDestino"])) {
        $listaVuelos = consultaVuelosInvitadosSalida(seguro($_POST["ciudad"]));
    }
    return $listaVuelos;
}
if (count($_POST) > 0) {
    if (isset($_POST["aero"][0])) {
        $_SESSION["aeroOrigen"] = 1;
    }
    if (isset($_POST["aero"][1])) {
        echo "Hola";
        $_SESSION["aeroDestino"] = 1;
    }
    $listaVuelos=sesionComprobar();
} else {
    $listaVuelos=sesionComprobar();
}




?>