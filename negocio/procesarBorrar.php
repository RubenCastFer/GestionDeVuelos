<?php 
include_once "../persistencia/databaseManagement.inc.php";
$id= $_GET["id"];
$cumplido=borrarVuelo($id);
$error='Se ha borrado el vuelo con el id: ' . $id;
if(!$cumplido){
    $error="Error al borrar el vuelo seleccionado";
}
?>