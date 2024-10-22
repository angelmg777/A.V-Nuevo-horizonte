<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/destinos.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Los Cabos</title>
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
                <a href="../admin/index.php" class="link link--active">Regresar</a>

                </div>
            </div>
        </nav>
      
        
            <h1 class="tit">Los Cabos, Baja California Sur</h1>

        <section class="container hero_main">

            <div class="texto">
                <h1 class="title"><span class="title_active">Garza Blanca Resort & Spa Los Cabos</span></h1>
                <p class="copy">Las habitaciones elegantes cuentan con terraza, TV de pantalla plana y acceso a Wi-Fi, así como minibar y cafetera Nespresso. Todas tienen baño en suite con ducha y bañera independiente; algunas ofrecen vista al océano. Las suites mejoradas de 1 y 2 habitaciones incluyen área de estar, mesa de comedor y cocina.
                    <span class="copy_active"></span></p>
                    <p class="copy">Los servicios incluyen 8 piscinas al aire libre, 2 bares y 4 restaurantes que varían desde un bar de alimentos crudos frente a la playa hasta un restaurante de carnes de lujo. También hay un spa, un gimnasio y una cancha de tenis, además de un delicatesen y espacio para eventos.
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
            <img src="../css/images/cabos1.jpeg"/>
          </li>
          <li id="slide2">
            <img src="../css/images/cabos2.jpeg"/>
          </li>
          <li id="slide3">
            <img src="../css/images/cabos3.webp"/>
          </li>
          <li id="slide4">
            <img src="../css/images/cabos4.webp"/>
          </li>
          <li id="slide5">
            <img src="../css/images/cabos5.webp"/>
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
