<?php
$servidor="localhost";
$baseDatos="aeropuertos"; 
$usuario= "root";
$pass="root";

function creaConexion(){
  return new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
}

//funciones base de datos:
    //usuario invitado
    function consultaVuelosInvitadosLlegada($destino){
       try {
        $conexion = creaConexion();
        $sql=$conexion->prepare("SELECT * FROM vuelos WHERE destino=:destino");
        $sql->bindParam(":destino", $destino);
        $sql->execute();
        $arrayVuelos=[];
        while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
            $arrayVuelos[]=$fila;
        }
        $conexion=null;
        return $arrayVuelos;
 
       } catch (PDOException $e) {
        echo $e;
       }
   
    }

    function consultaVuelosInvitadosSalida($origen){
        try {
         $conexion=creaConexion();
          $sql=$conexion->prepare("SELECT * FROM vuelos WHERE origen =:origen");
          $sql->bindParam(":origen", $origen);
          $sql->execute();
          $arrayVuelos=[];
            while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                $arrayVuelos[]=$fila;
            }
          
          $conexion=null;
          return $arrayVuelos;
        } catch (PDOException $e) {
           echo $e;
        }
       
    }


    //usuario gestor
    function obtenerVuelos(){
        try {
        $conexion=creaConexion();
        $sql = $conexion->prepare("SELECT * from vuelos;");
        $sql->execute();
        $arrayVuelos=[];
        while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
            $arrayVuelos[]=$fila;
        }
        $conexion=null;
        return $arrayVuelos;

        } catch (PDOException $e) {
           echo $e;

        }
        $conexion=null;

    }

    function VuelosInsertar($origen,$destino, $operadora, $fecha,$cantidadViajero){
     
        try {
        $conexion=creaConexion();
        $sql = $conexion->prepare("INSERT INTO vuelos values(null,:origen,:destino, :operadora, :fecha,:cantidadViajero)" );
        
        $sql->bindParam(":origen", $origen);
        $sql->bindParam(":destino", $destino);
        $sql->bindParam(":operadora", $operadora);
        $sql->bindParam(":fecha", $fecha);
        $sql->bindParam(":cantidadViajero", $cantidadViajero);
       $sql->execute();
       $id=$conexion->lastInsertId();
         
        } catch (PDOException $e) {
         echo $e;
        }
        $conexion=null;
        return $id;
    }

    function borrarVuelo($id){
        $retorno=false;
        try {
            $conexion = creaConexion();
            $sql=$conexion->prepare("DELETE from vuelos where id=:id");
            $sql->bindParam(":id", $id);
            $sql->execute();
            if($sql->rowCount()>0){
                $retorno=true;
            }
        } catch (PDOException $e) {
           echo $e;
        }
        $conexion=null;
        return $retorno;
    }

    //usuario tripulante
    function consultaVuelosCompanya($operadora){
      
        try {
            $conexion=creaConexion();
            $sql = $conexion->prepare("SELECT * from vuelos where operadora=:operadora;");
            $sql->bindParam(":operadora", $operadora);
            $sql->execute();
            $arrayVuelos=[];
            while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                $arrayVuelos[]=$fila;
            }
            $conexion=null;
            return $arrayVuelos;
        } catch (PDOException $e) {
           echo $e;
        }
        $conexion=null;
    }

    //compartida gestor y tripulante
    function vuelosEdit($origen,$destino,$operadora,$fecha,$cantidadViajero,$id){
        $retorno=false;
        try {
            $conexion=creaConexion();
           
            $sql = $conexion->prepare("UPDATE vuelos SET origen=:origen,destino=:destino,operadora=:operadora,fecha=:fecha,cantidadViajero=:cantidadViajero WHERE id=:id");
            $sql->bindParam(":origen", $origen);
            $sql->bindParam(":destino", $destino);
            $sql->bindParam(":operadora", $operadora);
            $sql->bindParam(":fecha", $fecha);
            $sql->bindParam(":cantidadViajero", $cantidadViajero);
            $sql->bindParam(":id", $id);
            $e=$sql->execute();
            echo $e;
            if ($sql->rowCount() > 0) {
                $retorno = true;
            }
        } catch (PDOException $e) {
          echo $e;
        }
       $conexion=null;
     return $retorno;
    }

    //Consulta tipo Usuario(gestor o companya)

    function obtenerUsuario($nombre){
        {
            try {
              $conexion=creaConexion();
                $sql = $conexion->prepare("SELECT * from usuarios where nombre=:nombre");
                $sql->bindParam(":nombre", $nombre);
                $sql->execute();
                $fila = $sql->fetch(PDO::FETCH_ASSOC);
                $conexion = null;
                return $fila;
            } catch (PDOException $e) {
                echo $e;
            }
        }

    }

    function obtenerVuelo($id){
        {
            try {
              $conexion=creaConexion();
                $sql = $conexion->prepare("SELECT * from vuelos where id=:id");
                $sql->bindParam(":id", $id);
                $sql->execute();
                $fila = $sql->fetch(PDO::FETCH_ASSOC);
                $conexion = null;
                return $fila;
            } catch (PDOException $e) {
                echo $e;
            }
        }

    }

 
?>
