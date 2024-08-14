<?php

session_start(); //Inicializa que puedas tener o crear sesiones de usuario.


    $connection = mysqli_connect('localhost', 'root', '', 'AV2');

    $usuario=$_POST['txtCorreo'];
    $contrasenia = md5($_POST['txtContra']);
        
        
    $consulta = "SELECT * FROM login WHERE correo ='$usuario' AND contrasenia='$contrasenia' AND estatus=1 ";
    $resultado = mysqli_query($connection, $consulta);

    $consulta2 = "SELECT * FROM login WHERE correo ='$usuario' AND contrasenia='$contrasenia' AND estatus=0 ";
    $resultado2 = mysqli_query($connection, $consulta2);

    $num_rows = mysqli_num_rows($resultado);
    $num_rows2 = mysqli_num_rows($resultado2);

    

            if($num_rows==1){
                $row = mysqli_fetch_array($resultado);
                
                            //Establecemos las variables de la Sesión 
                            $_SESSION['ID'] = $row['id_usuario'];
                             $_SESSION['Nombre'] = $row['nombre'];
                             $_SESSION['eMail'] = $row['correo'];
            
                             mysqli_close($connection); //Cierra la conexión activa ...
                            
                             //Se genera la Sesión para el usuario y se manda llamar al index.php de la carpeta: admin
                             header('Location: admin/index.php'); 
                    
            }
            else if($num_rows2==1){

                $row = mysqli_fetch_array($resultado2);
                
                //Establecemos las variables de la Sesión 
                $_SESSION['ID'] = $row['id_usuario'];
                 $_SESSION['Nombre'] = $row['nombre'];
                 $_SESSION['eMail'] = $row['correo'];

                 mysqli_close($connection); //Cierra la conexión activa ...
                
                 //Se genera la Sesión para el usuario y se manda llamar al index.php de la carpeta: admin
                 header('Location: usuarios/index.php'); 
            }
            else{
                header("location: loginvista.php?fallo=true");
            }
?>
