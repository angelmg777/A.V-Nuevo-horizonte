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
            <h1 class="title"> Necesitas informacion <span class="title_active">Contactanos</span></h1>
                <p class="copy">Nos encargamos de hacer el viaje de tus sueños en una <span class="copy_active">Realidad</span></p>
            </div>
            <img src="../css/images/img1.jpg" alt="" width="50%" height="60%" class="mockup">
        </section> 
    </header>


</body>

</body>
</html>

<main>

    <section class="team1">
        <div>
                <h2 class="subtitle">Contactanos <span class="point"></span></h2>
        
                <div class="container1">
                
                    <article class="container-cards">
                        <div class="card">
                            <img src="../css/images/person1.jpeg" alt="" class="card_img1">
                            <div class="card_text">
                                <p class="card_list1">Fundador</p>
                                <h3 class="card_title1">Angel Munguia Gonzalez<span class="point">.</span></h3>
                                <p class="card_copy1">+1 874-385-4330</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../css/images/person2.jpg" alt="" class="card_img1">
                            <div class="card_text">
                                <p class="card_list1">Manager</p>
                                <h3 class="card_title1">Josheline Robles<span class="point">.</span></h3>
                                <p class="card_copy1">+1 707-343-2370</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../css/images/person.jpg" alt="" class="card_img1">
                            <div class="card_text">
                                <p class="card_list1">Agente de Viaje</p>
                                <h3 class="card_title1">Pablo Escobar<span class="point">.</span></h3>
                                <p class="card_copy1">+1 353-125-1000</p>
                            </div>
                        </div>
                    </article>
                </div>
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



   