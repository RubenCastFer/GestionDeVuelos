<!-- crear solo para gestor!!! -->
<!-- editar reutilizar para gestor y tripulaciones con las sesiones-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/creacion.css">
    <title>Creacion</title>
</head>
<body>

    <?php

        include "../negocio/procesarCreacion.php";


        

    ?>

    <header>
        <a id="titulocentral" href="#"> <!-- Enlace, el href puede cambiar según la sesión-->
            <span class="titulo">Gestor de viajes</span>
            <span class="subtitulo">Desarrollo Web en Entorno Servidor</span>
        </a>    
        <nav>
            <ul>
                <!-- Aquí habrá un if, dependiendo de la sesión. Si es gestor, saldrá la opción de crear-->
                <li><a href="login.php">Sesión iniciada</a></li>
                <li><a href="gestor.php">Cerrar sesión</a></li>
            </ul>
        </nav>

        <!--FORMULARIO DE EDICION-->

        <div class="main">
            <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST">
                <section class="form-register">
                    <h4>Sección de creación</h4>
                    <label for="name">Ciudad de origen:</label>
                    <input class="controls" type="text" name="nombres" id="nombres" required="required" >
                    <br>
                    <label for="name">Ciudad de destino:</label>
                    <input class="controls" type="text" name="apellidos" id="apellidos" >
                    <br>
                    <label for="name">Operadora:</label>
                    <input class="controls" type="text" name="apellidos" id="apellidos" >
                    <br>
                    <label for="name">Fecha:</label>
                    <input type="date" name="fecha" step="1" min="2013-01-01" max="2013-12-31" value="2013-01-01">
                    <br>
                    <label for="name">Cantidad de viajeros</label>
                    <input class="controls" type="text" name="apellidos" id="apellidos" >
                    <br><br>
                    <button class="button__text"><a href="negocio/procesarLogin.php">Entrar</a></buttom>
                </section>
            </form>   
    </header>
    <div id="contenedor">
        <p><?php echo $error?></p>
    </div>

    <footer id="main-footer"> <!-- Pie, se podría hacer 3 columnas para nombrar a los integrantes del grupo. -->
        <p>Pensar todavía.</p>
    </footer>
</body>
</html>