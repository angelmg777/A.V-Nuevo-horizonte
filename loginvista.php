<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/formulario.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<script> 
        function funcion()
        {
            alert("Click");
        }
    </script>
<body>

    <?php
        $guser = "";
        $gerror ="";
        if (isset($_GET['error']))
        {
            $guser = $_GET['user'];
            $gerror = $_GET['error'];
        }
    ?>


<body>
    <form action="veriflogin.php" method="post" class="formulario">
        <div class="contenedor">
            <h1>Iniciar Sesion</h1>

            <div class="input-contenedor">
                <i class='bx bx-envelope icon'></i>
                <input type="text" name="txtCorreo" placeholder="Correo electronico" required>
            </div>

            <div class="input-contenedor">
                <i class='bx bx-lock-alt icon'></i>
                <input type="password" name="txtContra" placeholder="Contraseña" required>
            </div>

            <?php
        
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<div style='color:red'>Usuario o contraseña invalido </div>";
       }
     ?>

            <input type="submit" value="Login" class="button">

            
            <p>¿No tienes cuenta? <a href="formulario.html" class="link">Registrate</a></p>
        </div>



    </form>

</body>
</html>

