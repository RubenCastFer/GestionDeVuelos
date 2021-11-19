<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/presentacion.css">
    <title>Pruebas</title>
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
                <li><a href="login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    
    </header>
    <div id="contenedor">
        <!-- Hacer formulario / Filtro, intentar sea vertical-->

        <div id="fondofiltro">            
            <table id="filtro">
                <tr>
                    <td>
                        <input type="checkbox" name="aero" value="origen" id="origen">
                        <label for="origen">Origen</label><br>

                        <input type="checkbox" name="aero" value="destino" id="destino">
                        <label for="destino">Destino</label>
                    </td>
                    <td>
                        <label for="ciudad">Nombre de la ciudad</label><br>
                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad">
                    </td>
                    <td>
                        <input type="submit" value="Filtrar">
                    </td>
                </tr>
            </table>
        </div>
        
    </div>  <!-- Fin contenedor -->
    <footer id="main-footer"> <!-- Pie, se podría hacer 3 columnas para nombrar a los integrantes del grupo. -->
        <p>Pensar todavía.</p>
    </footer>
</body>
</html>