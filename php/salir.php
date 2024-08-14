<?php
    //Este script de php va a destruir la session activa y se manda llamar al index principal.
    session_start(); //inicio session 
    session_unset(); //Libera todas las variables de session que esten activas
    session_destroy(); // Destruye la session 

    //Se va al index principal
    echo "<script>window.location='../index.html';</script>"

?>