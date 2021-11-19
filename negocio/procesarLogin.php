<?php
    /*
        buscar usuario redireccionar a gestor o a tripulacion por sesion
    */ 
    include_once "../persistencia/databaseManagement.inc.php";

    $error='';
    if (count($_POST) > 0) {
        session_start();
        $nombre = $_POST["nombre"];
        $pass = $_POST["pass"];
        $datosUsu=obtenerUsuario($nombre);
        if($datosUsu!=''){
            if(password_verify($pass,$datosUsu["contrasenia"])){
                if($datosUsu["correspondencia"]=="gestor"){
                    $_SESSION["correspondencia"]="gestor";
                    header("Location: ../presentacion/gestor.php");
                }else{
                    header("Location: ../presentacion/tripulaciones.php?operadora=".$datosUsu["correspondencia"]);
                }
            }else{
                $error="Contraseña incorrecta";
            }
        }else{
            $error="Usuario no existe";
        }
    }
?>