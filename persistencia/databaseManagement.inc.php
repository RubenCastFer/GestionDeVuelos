<?php
$servidor="localhost";
$baseDatos="aeropuertos"; 
$usuario= "root";
$pass="root";

//funciones base de datos:
    //usuario invitado
    function consultaVuelosInvitadosLlegada($destino){
       try {
        $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
        $sql=$conexion->prepare("SELECT * FROM vuelos WHERE destino=:destino");
        $sql->bindParam(":destino", $id);
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
          $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
          $sql=$conexion->prepare("SELECT * FROM vuelos WHERE origen =:origen");
          $sql->bindParam(":origen", $origen);
          $sql->execute();
          $arrayVuelos=[];
            while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
                $arrayVuelos[]=$fila;
            }
          
          $conexion=null;
          return $fila;
        } catch (PDOException $e) {
           echo $e;
        }
       
    }


    //usuario gestor
    function obtenerVuelos(){
        try {
        $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
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

    function VuelosInsertar(){
        try {
           
        } catch (PDOException $e) {
         echo $e;
        }
    }

    function borrarVuelo(){

    }

    //usuario tripulante
    function consultaVuelosCompanya(){
        
    }

    //compartida gestor y tripulante
    function VuelosEdit(){
        
    }

    //Consulta tipo Usuario(gestor o companya)

    function obtenerUsuario(){

    }
consultaVuelosInvitadosLlegada("Madrid");
 consultaVuelosInvitadosSalida("Sevilla");
 
?>

<!-- <thead>
           <tr>
           <th>Id</th>
               <th>Origen</th>
               <th>Destino</th>
               <th>Operadora</th>
               <th>Fecha</th>
               <th>CantidadViajeros</th>
              
           </tr>
       </thead>
       <tbody> -->
<?php
       $lista=obtenerVuelos();

       echo "<table border=1px>";
foreach($lista as $fila) {
  
  

     echo "<tr>";
     echo "<td>";
  
     echo $fila['id'];
  
     echo "</td>";
    
     echo "<td>";
  
     echo $fila['origen'];
  
     echo "</td>";
  
     echo "<td>";
  
     echo $fila['destino'];
  
     echo "</td>";
  
     echo "<td>";
  
     echo $fila['operadora'];
  
     echo "</td>";
  
     echo "<td>";
  
     echo $fila['fecha'];
  
     echo "</td>";
  
     echo "<td>";
  
     echo $fila['cantidadViajero'];
  
     echo "</td>";

    
     echo "</tr>";
    
   }
   echo "</table>";
   echo "<br>";
?>