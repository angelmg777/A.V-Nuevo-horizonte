<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/destinos.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Acapulco</title>
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
      
        
            <h1 class="tit">Acapulco, Guerrero</h1>

        <section class="container hero_main">

            <div class="texto">
                <h1 class="title"><span class="title_active">Dreams Acapulco Resort & Spa</span></h1>
                <p class="copy">Las habitaciones tranquilas cuentan con Wi-Fi gratis, TV de pantalla plana, minibar y terraza o balcón amueblados. Algunas tienen vista a la bahía. Las suites disponen de área de estar y comedor. La suite mejorada de 3 habitaciones incluye también cocina y tina. Se ofrece servicio a la habitación las 24 horas, todos los días.
                    <span class="copy_active"></span></p>
                    <p class="copy">Las comodidades incluyen restaurantes, una cafetería, bares, un gimnasio, piscinas al aire libre, un spa y acceso directo a la playa. También hay espacio para eventos y reuniones con capacidad para 900 personas. Se ofrecen deportes acuáticos, yoga y voleibol de playa.
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
            <img src="../css/images/aca1.jpeg"/>
          </li>
          <li id="slide2">
            <img src="../css/images/aca2.jpeg"/>
          </li>
          <li id="slide3">
            <img src="../css/images/aca3.webp"/>
          </li>
          <li id="slide4">
            <img src="../css/images/aca4.jpeg"/>
          </li>
          <li id="slide5">
            <img src="../css/images/aca5.jpeg"/>
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
