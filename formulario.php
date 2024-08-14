 <!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/formulario.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <title>Registrate</title>
    </head>
    <body>

            <form action="registrar.php" method="post" class="formulario">
                
                
                
                <div class="contenedor">
                    <h1>Registrate</h1>
                    <div class="input-contenedor">
                        <i class='bx bxs-user icon'></i>
                        <input type="text" name="txtNombre" placeholder="Nombre Completo" required>
                    </div>

                    <div class="input-contenedor">
                        <i class='bx bx-envelope icon'></i>
                        <input type="email" name="eCorreo" placeholder="Correo electronico" required>
                    </div>

                    <div class="input-contenedor">
                        <i class='bx bx-lock-alt icon'></i>
                        <input type="password" name="pContrasenia" placeholder="Contraseña" required>
                    </div>

                    <?php
        
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'false')
        {
           echo "<div style='color:red'>Este correo ya ha sido registrado </div>";
        }
      ?>

                    <input type="submit" value="Registrate" class="button">

                    <p>Al registrarte, aceptas las condiciones de uso y privacidad.</p>
                    <p> </p>
                    <p>¿Ya tienes cuenta? <a href="loginvista.html" class="link">Iniciar Sesión</a></p>
                </div>
            </form>
        
    </body>

</html> 

