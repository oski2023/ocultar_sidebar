$(document).ready(function () {
    // Redirige a la página de destino con un parámetro en la URL
    $('#btnOcultarSidebar').on('click', function () {
        window.location.href = "pagina_destino.php?ocultar_sidebar=true";
    });
    // Redirigir de vuelta a la página principal
    $('#btnVolver').on('click', function () {
        window.location.href = "index.php";
    });
});

