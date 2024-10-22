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
    <header class="hero1" id="inicio">
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
            <h1 class="title"> Conoce nuestros <span class="title_active">Mejores destinos</span></h1>
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
            <h2 class="subtitle">Comienza tu viaje ahora!<span class="point"></span></h2>
            <p class="copy_section">Los mejores destinos los tenemos aqui</p>

            <article class="container-cards">
                <div class="card">
                    <img src="../css/images/cancun.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Cancun, Quintana roo<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/cancun.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/vallarta.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Puerto Vallarta, Jalisco<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/vallarta.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/guanajuato.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Guanajuato, Guanajuato<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/guanajuato.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
            </article>
        </div>

        <div class="container">
        

            <article class="container-cards">
                <div class="card">
                    <img src="../css/images/losCabos.jpg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Los Cabos, Baja California sur<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/losCabos.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/Allende.webp" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">San Miguel de Allende, Guanajuato<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/allende.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/playaCarmen.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Playa del Carmen, Quintana roo<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/playaCarmen.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
            </article>
        </div>

        <div class="container">
        

            <article class="container-cards">
                <div class="card">
                    <img src="../css/images/puebla.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Puebla, Puebla<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/puebla.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/mazatlan.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Mazatlan, Sinaloa<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/mazatlan.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/escondido.webp" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Puerto Escondido, Oaxaca<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/escondido.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
            </article>
        </div>

        <div class="container">
        

            <article class="container-cards">
                <div class="card">
                    <img src="../css/images/cozumel.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Cozumel, Quintana roo<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/cozumel.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/monterrey.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Monterrey, Nuevo Leon<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/monterrey.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/acapulco.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Acapulco, Guerrero<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP2/acapulco.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
            </article>
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

