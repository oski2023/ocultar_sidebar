<!-- pagina_destino.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/main.css">
    <title>Página sin Sidebar</title>
    <script src="./public/jquery-3.7.1.min.js"></script>
</head>

<body>

    <?php
    // Verifica si el parámetro 'ocultar_sidebar' está en la URL
    $ocultar_sidebar = isset($_GET['ocultar_sidebar']) && $_GET['ocultar_sidebar'] == 'true';
    ?>

    <!-- Sidebar que puede ser ocultado -->
    <div class="sidebar <?php if ($ocultar_sidebar) echo 'hidden'; ?>">
        <h2>Sidebar</h2>
        <p>Contenido del sidebar oculto.</p>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Página sin Sidebar</h1>
        <p>Esta es la página donde el sidebar está oculto si el parámetro está presente.</p>

        <!-- Botón para volver a la página principal -->
        <button id="btnVolver">Volver a la página con sidebar</button>
    </div>
    <script src="./public/main.js"></script>
</body>

</html>