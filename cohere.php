<?php
function get_header() {
    $ai_name = "Cohere";
    $ai_version = "3.0";
    $php_version = phpversion();

    echo <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">$ai_name $ai_version | PHP $php_version</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com" target="_blank">Google</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inteligencias Artificiales 1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="https://enlaceallm.com/claude" target="_blank">Claude</a>
                        <a class="dropdown-item" href="https://enlaceallm.com/gemini" target="_blank">Gemini</a>
                        <a class="dropdown-item" href="https://enlaceallm.com/copilot" target="_blank">Copilot</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inteligencias Artificiales 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="https://enlaceallm.com/grok" target="_blank">Grok</a>
                        <a class="dropdown-item" href="https://enlaceallm.com/mistral" target="_blank">Mistral</a>
                        <a class="dropdown-item" href="https://enlaceallm.com/cohere" target="_blank">Cohere</a>
                        <a class="dropdown-item" href="https://enlaceallm.com/chatgpt" target="_blank">ChatGPT</a>
                        <a class="dropdown-item" href="https://enlaceallm.com/qwen" target="_blank">Qwen</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
HTML;
}

function get_footer() {
    echo <<<HTML
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>Ejercicio 3 - Desarrollado con <i class="fas fa-heart text-danger"></i> por Tu Nombre</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
HTML;
}

// Llamar a las funciones para generar el header y el footer
get_header();
?>

<!-- Contenido principal de la página -->
<h1 class="text-center">Bienvenido al Ejercicio 3</h1>
<p class="text-center">Esta es una página de ejemplo que cumple con los requisitos especificados.</p>

<?php
get_footer();
?>
