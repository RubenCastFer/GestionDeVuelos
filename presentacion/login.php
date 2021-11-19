<!-- enviar datos a procesar login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php
    include "databaseManagement.inc.php";
    ?>
      
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                
                <form class="login">
                    <div class="campoInicioSesion">
                        <i class="iconoLogin fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Nombre usuario / email">
                    </div>
                    <div class="campoInicioSesion">
                        <i class="iconoLogin"></i>
                        <input type="password" class="login__input" placeholder="Contraseña">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text"><a href="negocio/procesarLogin.php">Inicia sesión</a></span>
                        <i class="button__icon"></i>
                    </button>	
                    <div class="error">
                        <?php
                        echo $error;
                        ?>
                    </div>
                </form>
                
            </div>
            <div class="screen__background">
                <span class="fondoPantalla fondoPantalla4"></span>
                <span class="fondoPantalla fondoPantalla3"></span>		
                <span class="fondoPantalla fondoPantalla2"></span>
                <span class="fondoPantalla fondoPantalla1"></span>
            </div>		
        </div>
    </div>  
</body>
</html>