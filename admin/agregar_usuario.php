<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Tus metaetiquetas y enlaces a estilos ... -->
    <title>Proyecto Desarrollo Web - Agregar Usuario</title>
</head>
<body>
    <!-- ... Tu encabezado y navegación ... -->

    <main>
        <section class="container">
            <h2 class="subtitle">Agregar Usuario</h2>
            <form action="procesar_agregar_usuario.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>

                <label for="correo">Correo:</label>
                <input type="email" name="correo" required>

                <label for="contrasenia">Contraseña:</label>
                <input type="password" name="contrasenia" required>

                <label for="nombre">Estatus:</label>
                <input type="Numeric" name="estatus" required>

                <input type="submit" value="Agregar Usuario">
            </form>
        </section>
    </main>

    <!-- ... Tu pie de página ... -->
</body>
</html>
