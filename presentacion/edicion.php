<!-- editar reutilizar para gestor y tripulaciones con las sesiones-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edicion.css">
    <title>Edicion</title>
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

        <!--FORMULARIO DE EDICION-->

        <div class="main">
            <section class="form-register">
                <h4>Sección de edición</h4>
                <label for="name">Ciudad de origen:</label>
                <input class="controls" type="text" name="nombres" id="nombres" required="required" placeholder="Ciudad de origen">
                <br>
                <label for="name">Ciudad de destino:</label>
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ciudad de destino">
                <br>
                <label for="name">Operadora:</label>
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Operadora">
                <br>
                <label for="name">Fecha:</label>
                <input type="date" name="fecha" step="1" min="2013-01-01" max="2013-12-31" value="2013-01-01">
                <br>
                <label for="name">Cantidad de viajeros</label>
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Cantidad de viajeros">
                <input class="botons" type="submit" value="Entrar">
                <button class="button login__submit">
                    <span class="button__text"><a href="negocio/procesarLogin.php">Inicia sesión</a></span>
                    <i class="button__icon"></i>
                </button>
                
              </section>
            <br><br><br><br><br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12685.635060397448!2d-5.9817521!3d37.3565037!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c813182e6db9555!2sEstadio%20Benito%20Villamar%C3%ADn!5e0!3m2!1ses!2ses!4v1635502561261!5m2!1ses!2ses" width="600" height="450" style="border:0; border-radius: 20px; width: 60%;" allowfullscreen="" loading="lazy"></iframe>
            <br><br><br><br><br><br>
            </div>
    
    </header>
    <div id="contenedor">
        <p></p>
    </div>

    <footer id="main-footer"> <!-- Pie, se podría hacer 3 columnas para nombrar a los integrantes del grupo. -->
        <p>Pensar todavía.</p>
    </footer>
</body>
</html>
