
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
                echo "Bienvenid@: ".$_SESSION["Nombre"];
            }           
        ?>
                </div>
                <div class="links">
                    <a href="index.php" class="link">Inicio</a>
                    <a href="destinos.php" class="link">Destinos</a>
                    <a href="paquetes.php" class="link">Paquetes</a>
                    <a href="contacto.php" class="link">Contacto</a>
                    <a href="../php/salir.php" class="link link--active">Salir</a>
                </div>
            </div>
        </nav>
        <section class="container hero_main">

            <div class="hero_textos">
                <h1 class="title"> La mejor <span class="title_active">Experiencia en Viajes</span></h1>
                <p class="copy">Nos encargamos de hacer el viaje de tus sueños en una <span class="copy_active">Realidad</span></p>
                <a href="destinos.php" class="cta">Elige el lugar de tus sueños</a>
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
                        <a href="../destinosPHP/cancun.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/vallarta.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Puerto Vallarta, Jalisco<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP/vallarta.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/guanajuato.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Guanajuato, Guanajuato<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP/guanajuato.php" class="card_button">Más Detalles</a>
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
                        <a href="../destinosPHP/losCabos.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/Allende.webp" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">San Miguel de Allende, Guanajuato<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP/allende.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="../css/images/playaCarmen.jpeg" alt="" class="card_img">
                    <div class="card_text">
                        
                        <h3 class="card_title">Playa del Carmen, Quintana roo<span class="point"></span></h3>
                        <div> </div>
                        <a href="../destinosPHP/playaCarmen.php" class="card_button">Más Detalles</a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class = "opinion">

        <div class="container">
            <h2 class="subtitle">Por qué elegirnos...<span class="point"></span></h2>
            <p class="copy_section">El momento más feliz de la vida humana, pienso yo, es partir hacia tierras desconocidas.
            </p>
        </div>
       
            <img src="../css/images/img5.png" alt="" width="70%" height="70%" class="mockup">
      

    </section>

    <section class="team">
<div>
        <h2 class="subtitle">Un equipo - Una mision <span class="point"></span></h2>

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


<section class=" trx">
    <section class="email container container--modifier">
        
        <h2 class="subtitle subtitle--modifier">Somos tu mejor opción, viaja ya!<span class="point">.</span></h2>
        <p class="copy_section copy_section--modifier"> Somos una empresa de agencia de viajes en la cual podrás disfrutar de la mejor experiencia Así como conocer los mejores  destinos turísticos</p>

            <div class="check">
                <div class="check_item">
                    <i class='bx bx-check' ></i>
                    <div class="check_numbers">
                        <p class="check_number">+1,500</p>
                        <p class="check_copy">Viajes Exitosos</p>
                    </div>
                </div>
                <div class="check_item">
                    <i class='bx bx-check' ></i>
                    <div class="check_numbers">
                        <p class="check_number">+700</p>
                        <p class="check_copy">Usuarios</p>
                    </div>
                </div>

            </div>
            
    </section>
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
