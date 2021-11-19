<?php
if(count($_GET)>0){
    $id=$_GET["id"];
    $vuelo=obtenerVuelo($id);
}else{
    $id=$_POST["id"];
    $vuelo=obtenerVuelo($id);
}
$origen="";
$destino="";
$operadora="";
$fecha="";
$cantidadViajero="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $origen=$_POST["origen"];
    $destino= $_POST["destino"];
    $operadora= $_POST["operadora"];
    $fecha= $_POST["fecha"];
    $cantidad_viajero=$_POST["cantidadViajeros"];
    
  
}
    

?>