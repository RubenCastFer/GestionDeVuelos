<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/gestor.css">
    <?php include_once "../negocio/procesarGestores.php"?>
    <title>Vuelos</title>
</head>
<?php session_start(); ?>
<body>
    <header>
        <a id="titulocentral" href="#"> <!-- Enlace, el href puede cambiar según la sesión-->
            <span class="titulo">Gestor de viajes</span>
            <span class="subtitulo">Desarrollo Web en Entorno Servidor</span>
        </a> 
        <nav>
            <ul>
                <!-- Aquí habrá un if, dependiendo de la sesión. Si es gestor, saldrá la opción de crear-->
                <li><a href="creacion.php">Crear vuelo</a></li>
                <li><a href="../negocio/cerrarSesion.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    
    </header>
    <div id="contenedor">
        
    <div class="contenedora">
        <div class="principal">
            <table style="width: 100%;">
                <tr>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Compañia</th>
                    <th>Fecha</th>
                    <th>Número de pasajeros</th>
                    <th>Editar</th>
                    <th>Crear</th>
                </tr>
                <?php
                foreach ($ListaVuelos as $Vuelo) {
                    $origen = $ListaVuelos ["origen"];
                    $destino = $ListaVuelos ["destino"];
                    $companya = $ListaVuelos ["operadora"];
                    $fecha = $ListaVuelos ["fecha"];
                    $pasajeros = $ListaVuelos ["cantidadViajero"];
                    $id = $ListaVuelos ["id"];
                    echo "<tr>";
                    echo "<td>$origen</td>";
                    echo "<td>$destino</td>";
                    echo "<td>$companya</td>";
                    echo "<td>$fecha</td>";
                    echo "<td>$pasajeros</td>";
                    echo "<td><a href='./edicion.php?id=". $id."'>Editar</a></td>";
                    echo "<td><a href='./borrado.php?id=".$id."'>Borrar</a></td>";
                    echo "</tr>";
                }
                ?>
                
            </table>
        </div>
    </div>
    
</div>
        
        
    </div>  <!-- Fin contenedor -->
    <footer id="main-footer">
       <p>Desarrollo web en Entorno Servidor.</p>
    </footer>
</body>
</html>