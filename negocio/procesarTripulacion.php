<?php
  
   include "databaseManagement.inc.php";
   
       function listaVuelosTripulacion(){
           session_start();
           if(isset($_SESSION["correspondencia"])){
               if($_SESSION["correspondencia"]!="gestor"){
                   $operadora=$_GET["operadora"];
                   $listaVuelos=consultaVuelosCompanya($operadora);
   
                   if($listaVuelos>0){
                       return $listaVuelos;
                   }
               }else{
                   header("location: ../presentacion/index.php");
               }
           }else{
               header("location: ../presentacion/index.php");
           }
       }
   
?>