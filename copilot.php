<?php
// Función para el header
function renderHeader() {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
        <!-- Bootstrap 4.6.x desde jsDelivr -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Copilot v1.0 - PHP <?php echo phpversion(); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com" target="_blank">Google</a>
                    </li>
                    <!-- Primer dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-toggle="dropdown">
                            IA Populares
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Claude</a>
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Gemini</a>
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Copilot</a>
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Qwen</a>
                        </div>
                    </li>
                    <!-- Segundo dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown2" role="button" data-toggle="dropdown">
                            Otras IA
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Grok</a>
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Mistral</a>
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">Cohere</a>
                            <a class="dropdown-item" href="https://enlaceallm.com" target="_blank">ChatGPT</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
}

// Función para el footer
function renderFooter() {
    ?>
        <footer class="bg-dark text-white text-center p-3 mt-5">
            <p>Ejercicio 3 - Página de prueba con Bootstrap y PHP</p>
        </footer>
        <!-- JS de Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
}

// Renderizar página
renderHeader();
renderFooter();
?>
