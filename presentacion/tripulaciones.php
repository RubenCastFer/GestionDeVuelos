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
                <li><a href="index.php">Cerrar sesión</a></li>
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
                </tr>
            </table>
        </div>
    </div>
    
</div>
        
        
    </div>  <!-- Fin contenedor -->
    <footer id="main-footer"> <!-- Pie, se podría hacer 3 columnas para nombrar a los integrantes del grupo. -->
        <p>Pensar todavía.</p>
    </footer>
</body>
</html>