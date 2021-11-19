<?php

    /*
        recoger datos de gestor segun la sesiones, gestinar con bd y devolver resultados "seguro"
    */
    include "databaseManagement.inc.php";

    function listaVuelosGestor(){

        session_start();
        if(isset($_SESSION["correspondencia"])){
            if($_SESSION["correspondencia"] == "gestor"){
                $listaVuelos = obtenerVuelos();
                
                if($listaVuelos > 0){
                    return $listaVuelos;
                }
            }else {
                header("location: ../presentacion/index.html");
            }
        }else{
            header("location: ../presentacion/index.html");
        }
        

    }
?>