<!-- index.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/main.css">
    <title>Página con Sidebar</title>
    <script src="./public/jquery-3.7.1.min.js"></script>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Sidebar</h2>
        <p>Contenido del sidebar.</p>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h1>Página principal</h1>
        <p>Esta es la página principal con el sidebar visible.</p>

        <!-- Botón para redirigir a la página sin sidebar -->
        <button id="btnOcultarSidebar">Ir a página sin sidebar</button>
    </div>
    
    <script src="./public/main.js"></script>
</body>

</html>