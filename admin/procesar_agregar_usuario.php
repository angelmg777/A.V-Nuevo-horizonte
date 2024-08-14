<?php
session_start();

// Realiza la conexión a la base de datos
$connection = mysqli_connect('localhost', 'root', '', 'AV2');

if (!$connection) {
    die('Error de conexión a la BD...' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasenia = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);
    $estatus = $_POST["estatus"];

    // Realiza la inserción en la base de datos
    $query = "INSERT INTO login (nombre, correo, contrasenia, estatus) VALUES ('$nombre', '$correo', '$contrasenia', '$estatus')";
    $resultado = mysqli_query($connection, $query);

    if ($resultado) {
       
        header('Location: usuarios.php');
        exit;
    } else {
        echo "Error al agregar usuario: " . mysqli_error($connection);
    }
} else {
    echo "Acceso no autorizado.";
}

// Cierra la conexión a la base de datos al final del script
mysqli_close($connection);
?>

