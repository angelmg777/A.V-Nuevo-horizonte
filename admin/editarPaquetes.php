<?php session_start(); ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/formulario.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <title>Editar</title>
    </head>
    <body>
             <?php 
 

 $connection = mysqli_connect('localhost', 'root', '', 'AV2');


        if(isset($_POST['enviar'])){

                   $id=$_POST['id'];
                   $costo=$_POST['Costo'];

                   
                     $sql="update paquetes set Costo='".$costo."' where IDPaquete='".$id."'";

                     $resultado=mysqli_query($connection,$sql);

                     if($resultado){
                            echo "<script language='JavaScript'>
                            alert('Los datos se actualizaron correctamente');
                            location.assign('paquetes.php');
                            </script>";
                     }else{
                        echo "<script language='JavaScript'>
                        alert('Los datos no se actualizaron correctamente');
                        location.assign('paquetes.php');
                        </script>";
                     }

                     mysqli_close($connection);
                }else{
                 
                    $id=$_GET['id'];
                    
                    

                    mysqli_close($connection);
                
?> 


            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="formulario">
                
            
                <div class="contenedor">
                    <h1>Editar Costo</h1>
                    <div class="input-contenedor">
                        <i class='bx bxs-user icon'></i>
                        <input type="text" name="Costo" value="" required>
                    </div>

    

                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <input type="submit" name="enviar" value="Editar" class="button">
                    <a href="usuarios.php">Regresar</a>
    
                </div>
            </form>
        <?php
                }
        ?>
                        </div>

    </body>

</html> 