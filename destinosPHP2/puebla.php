<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/destinos.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Puebla</title>
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
      
        
            <h1 class="tit">Puebla</h1>

        <section class="container hero_main">

            <div class="texto">
                <h1 class="title"><span class="title_active">Banyan Tree Puebla</span></h1>
                <p class="copy">Con paredes de piedra, las elegantes habitaciones con un ambiente del viejo mundo tienen TV de pantalla plana, minibar y caja de seguridad; algunas ofrecen área de visitas. Las suites incluyen salones separados.
                    <span class="copy_active"></span></p>
                    <p class="copy">Hay un restaurante que usa productos frescos de granja, una cafetería informal y un bar agradable. Los servicios incluyen una piscina en la azotea y un bar de tapas, así como un spa y un gimnasio.
                        <span class="copy_active"></span></p>
                    <h3>
                        Servicios mas populares:
                        <br>
                    </h3>
                    <br>
                    <ol type=”A”>
                        <li>-> Piscina</li>
                        <li>-> WiFi gratis</li>
                        <li>-> Parking gratis</li>
                        <li>-> Traslado aeropuerto (gratis)</li>
                        <li>-> Bar</li>
                        <li>-> 12 Restaurantes</li>
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
            <img src="../css/images/puebla1.jpeg"/>
          </li>
          <li id="slide2">
            <img src="../css/images/puebla2.jpeg"/>
          </li>
          <li id="slide3">
            <img src="../css/images/puebla3.jpeg"/>
          </li>
          <li id="slide4">
            <img src="../css/images/puebla4.jpeg"/>
          </li>
          <li id="slide5">
            <img src="../css/images/puebla5.webp"/>
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
