<?php
session_start();

if (!isset($_SESSION["ID"])) {
    header('Location: ../index.html');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lugar = $_POST["lugar"];
    $estado = $_POST["estado"];
    $dias = $_POST["dias"];
    $hotel = $_POST["hotel"];
    $vuelo = $_POST["vuelo"];
    $costo = $_POST["costo"];

    // Realizar la conexión a la base de datos
    $connection = mysqli_connect('localhost', 'root', '', 'AV2');

    if (!$connection) {
        die('Error de conexión a la BD...' . mysqli_connect_error());
    }

    // Preparar la consulta SQL para insertar el paquete
    $query = "INSERT INTO paquetes (Lugar, Estado, Dias, Hotel, Vuelo, Costo) 
              VALUES ('$lugar', '$estado', '$dias', '$hotel', '$vuelo', '$costo')";

    $resultado = mysqli_query($connection, $query);

    if ($resultado) {
        echo "<script language='JavaScript'>
            alert('El paquete se agregó correctamente');
            location.assign('paquetes.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Error al agregar el paquete');
            location.assign('formulario_agregar_paquete.php');
        </script>";
    }

    mysqli_close($connection);
} else {
    echo "Acceso no autorizado.";
}
?>
