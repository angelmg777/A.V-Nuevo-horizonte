<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/destinos.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Playa del Carmen</title>
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
                <a href="../usuarios/index.php" class="link link--active">Regresar</a>

                </div>
            </div>
        </nav>
      
        
            <h1 class="tit">Playa del Carmen, Quintana roo</h1>

        <section class="container hero_main">

            <div class="texto">
                <h1 class="title"><span class="title_active">Grand Hyatt Playa del Carmen Resort</span></h1>
                <p class="copy">Las habitaciones y suites son modernas y cuentan con ventanas de pared completa y balcón. Todas tienen Wi-Fi gratis, pantalla plana de 47 pulgadas, minibar y cafetera. Las habitaciones exclusivas para miembros del club ofrecen acceso exclusivo a un salón con desayuno incluido.
                    <span class="copy_active"></span></p>
                    <p class="copy">Las comodidades incluyen 2 restaurantes, 3 bares, 3 piscinas infinitas, un gimnasio, una sala de juegos para adolescentes, un spa y acceso directo a la playa. También hay 18 salas de reuniones. Se ofrece servicio de estacionamiento por una tarifa adicional.
                        <span class="copy_active"></span></p>
                    <h3>
                        Servicios mas populares:
                        <br>
                    </h3>
                    <br>
                    <ol type=”A”>
                        <li>-> Piscinas</li>
                        <li>-> WiFi gratis</li>
                        <li>-> Situado frente a la playa</li>
                        <li>-> Parking gratis</li>
                        <li>-> Traslado aeropuerto (gratis)</li>
                        <li>-> Bar</li>
                        <li>-> Restaurantes</li>
                        <li>-> Playa privada</li>
                        <li>-> Todo incluido</li>
                        <li>-> Comida Buffet</li>
                        <li>-> Desayuno Buffet</li>
                        <li>-> Aire Acondicionado</li>
                      
                      </ol>
            </div>
            
        </section> 
        
    </header>
    <div class="containe">
  
        <ul class="slider">
          <li id="slide1">
            <img src="../css/images/carmen1.jpg"/>
          </li>
          <li id="slide2">
            <img src="../css/images/carmen2.jpeg"/>
          </li>
          <li id="slide3">
            <img src="../css/images/carmen3.jpeg"/>
          </li>
          <li id="slide4">
            <img src="../css/images/carmen4.webp"/>
          </li>
          <li id="slide5">
            <img src="../css/images/carmen5.jpeg"/>
          </li>
        </ul>
        
        <ul class="menu">
          <li>
            <a href="#slide1"></a>
          </li>
          <li>
            <a href="#slide2"></a>
          </li>
           <li>
            <a href="#slide3"></a>
          </li>
          <li>
            <a href="#slide4"></a>
          </li>
          <li>
            <a href="#slide5"></a>
          </li>
        </ul>
        
      </div>
<br>
<br>
<br>
<br>
<br>


    <footer class="footer">

    
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
