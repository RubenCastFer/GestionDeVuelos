<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/invitado.css">
    <?php include_once "../negocio/procesarImvitado.php"?>
    <title>Vuelos</title>
</head>

<body>
    <header>
        <a id="titulocentral" href="#"> <!-- Enlace, el href puede cambiar según la sesión-->
            <span class="titulo">Gestor de viajes</span>
            <span class="subtitulo">Desarrollo Web en Entorno Servidor</span>
        </a> 
    
        <nav>
            <ul>
                <!-- Aquí habrá un if, dependiendo de la sesión. Si es gestor, saldrá la opción de crear-->
                <li><a href="index.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    
    </header>
    <div id="contenedor">
        <div id="fondofiltro">    
            <table id="filtro">
            <form method="GET">
                <tr>
                    <td>
                        <input type="checkbox" name="aero[]" value="origen" id="origen">
                        <label for="origen">Origen</label><br>

                        <input type="checkbox" name="aero[]" value="destino" id="destino">
                        <label for="destino">Destino</label><br>

                        <?php // En caso de que hubiese un error al no señalar un checkbox
                            echo $error;
                        ?>
                    </td>
                    <td>
                        <label for="ciudad">Nombre de la ciudad</label><br>
                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required>
                    </td>
                    <td>
                        <input type="submit" id="submit" value="Filtrar">
                    </td>
                </tr>
            </form>
            </table>    
        </div>

    <div class="contenedora">
        <div class="principal">
            <table style="width: 100%;">
                <tr>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Compañia</th>
                    <th>Fecha</th>
                    <th>Número de pasajeros</th>
                </tr>
                <?php
                foreach ($ListaVuelos as $Vuelo) {
                    $origen = $ListaVuelos ["origen"];
                    $destino = $ListaVuelos ["destino"];
                    $companya = $ListaVuelos ["operadora"];
                    $fecha = $ListaVuelos ["fecha"];
                    $pasajeros = $ListaVuelos ["cantidadViajero"];
                    echo "<tr>";
                    echo "<td>$origen</td>";
                    echo "<td>$destino</td>";
                    echo "<td>$companya</td>";
                    echo "<td>$fecha</td>";
                    echo "<td>$pasajeros</td>";
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