<?php
    /*
        recoger datos de gestor segun la sesiones, gestinar con bd y devolver resultados "seguro"

    */ 

    include "../persistencia/databaseManagement.inc.php";


    
    if (count($_GET) > 0) {
        $id = $_GET["id"];
        $vuelo = obtenerVuelo($id);
    } else {
        $id = $_POST["id"];
        $vuelo = obtenerVuelo($id);
    }

    $origen = "";
    $destino = "";
    $operadora = "";
    $fecha = "";
    $cantidadViajero = "";
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        function seguro($valor){
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);

            return $valor;
        }
        $origen = seguro($_POST["$origen"]);

        $destino = seguro($_POST["$destino"]);

        $operadora = seguro($_POST["$operadora"]);

        $cantidadViajero = seguro($_POST["$cantidadViajero"]);


        $fecha = $_POST["fecha"];

        $cumplido = VuelosEdit($id,$origen,$destino,$operadora,$fecha,$cantidadViajero);

        if($cumplido == false ){
            $error = "Error";
        }else{
            session_start();
            if($_SESSION["correspondecia"]=="gestor"){
                header("location: ../presentacion/gestor.php")
            }
        }
        
    }

?>