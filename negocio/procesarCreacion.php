<?php
    /*
        recoger datos de gestor segun la sesiones, gestinar con bd y devolver resultados "seguro"
    */ 

    $error = "";
    if (count($_POST) > 0) {
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }
        
        $id = VuelosInsertar(seguro($_POST["origen"]), $_POST["destino"], $_POST["operadora"], $_POST["fecha"], $_POST["cantidadViajero"]);
        if ($id != 0) {
            header("Location: ../presentacion/gestor.php");
            exit();
        } else {
            $error = "Datos incorrectos";
        }
    }

?>