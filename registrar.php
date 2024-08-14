<?php

    //Realizamos la conexion a la BD: "cursos"

    $connection = mysqli_connect('localhost', 'root', '', 'AV2');
    

    // for testing connection
    if(!$connection) {
        echo 'Error de conexion a la BD...'. mysqli_connect_error();
        exit();
    }
    else{
        
        //Tomamos las variables que viene del POST del formulario "registrar.html".
        $iNombre = $_POST['txtNombre'];
        $iCorreo = $_POST['eCorreo'];
        $iPassw = MD5($_POST['pContrasenia']); //Se aplica la función MD5 a la contraseña.

        $query = "SELECT correo FROM login WHERE correo='$iCorreo'";
        
        $resultcorreo = mysqli_query($connection, $query);
        $num_rows = mysqli_num_rows($resultcorreo);

        
        if($num_rows==1)
        {
            
            header("location: formulario.php?fallo=false");
        }
        else {
            $resultado =mysqli_query($connection, "INSERT INTO login(nombre, correo, contrasenia, estatus) VALUES('$iNombre','$iCorreo', '$iPassw', 0)");
            header('Location: loginvista.html');
        }
        
        
    }

?>


