<?php
include "databaseManagement.inc.php";

    function listaVuelosTripulacion(){
        if(isset($_SESSION["correspondencia"])){
            if($_SESSION["correspondencia"]!="gestor"){
                $operadora=$_GET["operadora"];
                $listaVuelos=consultaVuelosCompanya($operadora);

                if($listaVuelos>0){
                    return $listaVuelos;
                }
            }else{
                header("location: index.php");
            }
        }else{
            header("location: index.php");
        }
    }
