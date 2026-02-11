<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - IA y PHP</title>
    <!-- Bootstrap 4.6.x CSS desde jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome desde jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
</head>
<body>
    <?php
    function render_header() {
        $php_version = phpversion();
        echo '
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Le Chat (Mistral AI)</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.google.com" target="_blank">Google</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownAI1" role="button" data-toggle="dropdown">
                                IA Grupo 1
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://enlaceallm.com/claude" target="_blank">Claude</a>
                                <a class="dropdown-item" href="https://enlaceallm.com/gemini" target="_blank">Gemini</a>
                                <a class="dropdown-item" href="https://enlaceallm.com/copilot" target="_blank">Copilot</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownAI2" role="button" data-toggle="dropdown">
                                IA Grupo 2
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://enlaceallm.com/grok" target="_blank">Grok</a>
                                <a class="dropdown-item" href="https://enlaceallm.com/mistral" target="_blank">Mistral</a>
                                <a class="dropdown-item" href="https://enlaceallm.com/cohere" target="_blank">Cohere</a>
                                <a class="dropdown-item" href="https://enlaceallm.com/qwen" target="_blank">Qwen</a>
                                <a class="dropdown-item" href="https://enlaceallm.com/chatgpt" target="_blank">ChatGPT</a>
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        Le Chat (Mistral AI) - Versión: febrero 2026 | PHP: ' . $php_version . '
                    </span>
                </div>
            </div>
        </nav>
        ';
    }

    function render_footer() {
        echo '
        <footer class="bg-dark text-white text-center py-3 mt-5">
            <div class="container">
                <p class="mb-0">Ejercicio 3 - Desarrollado para Alfonso Orozco Aguilar</p>
                <p class="mb-0">Este es un ejemplo de integración de PHP, Bootstrap y Font Awesome en un solo archivo.</p>
            </div>
        </footer>
        ';
    }
    ?>

    <div class="container mt-4">
        <h1>Bienvenido al Ejercicio 3</h1>
        <p>Esta página cumple con los requisitos técnicos solicitados: PHP 7.x+, Bootstrap 4.6.x, Font Awesome desde jsDelivr, y estructura en un solo archivo.</p>
    </div>

    <?php render_header(); ?>

    <!-- Bootstrap 4.6.x JS y dependencias desde jsDelivr -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <?php render_footer(); ?>
</body>
</html>
