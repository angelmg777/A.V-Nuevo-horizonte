<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Proyecto Desarrollo Web</title>
</head>
<script>
        function editar(id_login)
        {
            //alert("Seleccionaste el ID: "+id_login);
            window.location="editar.php?id="+id_login;
        }
    </script>

<script>
        function eliminar(id_login)
        {
            confirmar();
            //alert("Seleccionaste el ID: "+id_login);
            window.location="eliminar.php?id="+id_login;
        }
    </script>
    
<script type="text/javascript">
        function confirmar(){
            return confirm('Estas seguro que quieres elimnar el usuario..?');
        }
        
    
    </script>

<body>
    <body>
    <header class="hero" id="inicio">
        <nav class="nav_hero">
            <div class="container nav_container">
                <div class="logo">
                    <h2 class="logo_name">A.V <img src="../css/images/logoNH.png" alt=""><span class="point"> Nuevo Horizonte</span></h2>
                    <?php
            if (!isset($_SESSION["ID"]))
            {
                header('Location: ../index.html');
            }
            else
            {
                echo "Bienvenid@ Administrador: ".$_SESSION["Nombre"];
            }           
        ?>
                </div>
                <div class="links">
                <a href="index.php" class="link">Inicio</a>
                    <a href="destinos.php" class="link">Destinos</a>
                    <a href="paquetes.php" class="link">AdminPaquetes</a>
                    <a href="usuarios.php" class="link">AdminUsuarios</a>
                    <a href="contacto.php" class="link">Contacto</a>

                    <a href="../php/salir.php" class="link link--active">Salir</a>
                </div>
            </div>
        </nav>
        <section class="container hero_main">

            <div class="hero_textos">
            <h1 class="title">  <span class="title_active">Administracion </span>Usuarios</h1>
                <p class="copy">Nos encargamos de hacer el viaje de tus sueños en una <span class="copy_active">Realidad</span></p>
            </div>
            <img src="../css/images/img1.jpg" alt="" width="50%" height="60%" class="mockup">
        </section> 
    </header>


</body>

</body>
</html>

<main>

<section class="courses" id="cursos">
        <div class="container">
            <h2 class="subtitle">Usuarios<span class="point"></span></h2>
            <p class="copy_section">Edita o elimina usuarios</p>

            <?php
                //Realizamos la conexion a la BD: "cursos"
                $connection = mysqli_connect('localhost', 'root', '', 'AV2');

                // for testing connection
                if(!$connection) {
                    echo 'Error de conexion a la BD...'. mysqli_connect_error();
                    exit();
                }
                    if (isset($_GET['editausuario']))
                    {
                        //Aqui se muestra el formulario haciendo una consulta para extraer los datos ...
                        echo 'Aqui de edita al usuario: '.$_GET['editausuario'];
                        
                    }
                    else
                    {
                    //Consultamos todos los registros de la tabla "login"
                    $query = "SELECT * FROM login ";
                    $resultado = mysqli_query($connection, $query);

                    if (!$resultado)
                    {
                        echo 'Error en la Consulta.'.mysqli_connect_error();

                    }
                    else
                    {
                        //Verificamos cuantas filas (row) trae la consulta 
                        $num_rows = mysqli_num_rows($resultado);

                        //Una vez que fue correcta la consulta y que existe el usuario en la tabla "login", cargamos la pagina: "menuresponsivo.html"
                        
                        if ($num_rows==0)
                            echo "Se encontraron 0 registros.";
                        else
                        {
                            
                            echo '<table id="TablaUser" border="2 ">'; //Se crea la tabla 
                            echo '<tr style="background-color: rgb(52, 223, 78);">'; //Crear una fila 
                            echo '<th>ID LOGIN</th> <th>NOMBRE</th> <th>CORREO</th> <th colspan="2" align="center">Acciones</th> ';
                            echo '</tr>'; //Se cierra la fila 

                            //Mostramos todos los registros de la consulta 
                            while ($row = mysqli_fetch_array($resultado))
                            {
                                $cIdLog = $row['id_usuario'];
                                $cNombre = $row['nombre'];
                                $cCorreo = $row['correo'];

                                echo '<tr>';
                                echo '<td>'.$cIdLog.' </td> <td>'.$cNombre.' </td> <td>'.$cCorreo.' </td>';
                                echo '<td> <input type="button" onclick="editar('.$cIdLog.');" class="boton" value="Editar"> </td>';
                                echo '<td> <input type="button"  onclick="eliminar('.$cIdLog.');" class="boton2" value="Eliminar"> </td>';
                                echo '<td> <a href="agregar_usuario.php" class="boton3">Agregar Usuario</a> </td>';

                                echo '</tr>';

                            }
                            echo '</table>';
                        
                            mysqli_close($connection); //Cierra la conexión activa ...
                        }
                        
                    }
                }
                

            ?>
            
        </div>
    </section>

    


        
    <footer class="footer">

        <div class="container footer_caption">

            <section class="download">
                <h3 class="title_footer">Descarga nuestra App</h3>
                <div class="download_app">
                    <div class="download_item">
                        <i class='bx bxl-apple download_logo' ></i>
                        <h4 class="download_title">App Store</h4>
                    </div>
                    <div class="download_item">
                        <i class='bx bxl-play-store download_logo' ></i>
                        <h4 class="download_title">Play Store</h4>
                    </div>

                </div>
                <div class="footer_copy">
                    <p class="copyright">Nuevo Horizonte &copy; 2022 Todos los derechos reservados</p>

                   
                </div>
            </section>
            <section class="get-mail">
                <h3 class="title_footer">¿Listo para el viaje de tus sueños?</h3>
                <form class="newsletter newsletter--modifier">
                </form>
                <div class="socialmedia">
                    <p class="socialmedia_legend">Siguenos en: </p>
                    <i class='socialmedia_icon bx bxl-facebook-circle' ></i>
                    <i class='socialmedia_icon bx bxl-linkedin-square'></i>
                    <i class='socialmedia_icon bx bxl-twitter' ></i>
                    <i class='socialmedia_icon bx bxl-instagram' ></i>
                    <i class='socialmedia_icon bx bxl-github' ></i>
                </div>
            </section>
        </div>
        <div class="contact" id="contacto">
            <div class="item_contact">
                <i class='bx bx-copyright contact_icon' ></i>
                <h3 class="contact_title">A.V. Nuevo Horizonte</h3>
            </div>
            <div class="item_contact">
                <i class='bx bx-mail-send contact_icon' ></i>
                <h3 class="contact_title">AV.NewHorizon@gmail.com</h3>
            </div>
            <div class="item_contact">
                <i class='bx bxs-edit-location contact_icon' ></i>
                <h3 class="contact_title">Av Palo Alto, Mich.</h3>
            </div>
            <div class="item_contact item_contact--gold">
                <i class='bx bxs-chat contact_icon contact_icon-modifier' ></i>
                <h3 class="contact_title">Contactanos ahora</h3>
            </div>
        </div>
    </footer>  



   