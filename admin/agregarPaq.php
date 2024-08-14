<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Tus metaetiquetas y enlaces a estilos ... -->
    <title>Proyecto Desarrollo Web - Agregar Paquete</title>
</head>
<body>
    <!-- ... Tu encabezado y navegación ... -->

    <main>
        <section class="container">
            <h2 class="subtitle">Agregar Paquete</h2>
            <form action="procesar_agregar_paquete.php" method="post">
                <label for="lugar">Lugar:</label>
                <input type="text" name="lugar" required>

                <label for="estado">Estado:</label>
                <input type="text" name="estado" required>

                <label for="dias">Días:</label>
                <input type="number" name="dias" required>

                <label for="hotel">Hotel:</label>
                <input type="text" name="hotel" required>

                <label for="vuelo">Vuelo:</label>
                <input type="text" name="vuelo" required>

                <label for="costo">Costo:</label>
                <input type="number" name="costo" required>

                <input type="submit" value="Agregar Paquete">
            </form>
        </section>
    </main>

    <!-- ... Tu pie de página ... -->
</body>
</html>

