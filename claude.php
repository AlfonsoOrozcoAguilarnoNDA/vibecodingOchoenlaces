<?php
/**
 * Ejercicio 3 - Página Bootstrap con navegación y menús dropdown
 * PHP 7.x+, Bootstrap 4.6.x, Font Awesome
 */

// Función para el header
function mostrarHeader() {
    $phpVersion = phpversion();
    $claudeVersion = "Claude Sonnet 4.5";
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Bootstrap Navigation</title>
    
    <!-- Bootstrap 4.6.2 CSS desde jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- Font Awesome desde jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <i class="fa fa-robot"></i> Ejercicio 3
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <!-- Link a Google -->
                <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com" target="_blank">
                        <i class="fa fa-google"></i> Google
                    </a>
                </li>
                
                <!-- Primer Dropdown: Claude, Gemini, Copilot -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-brain"></i> IA Grupo 1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown1">
                        <a class="dropdown-item" href="https://claude.ai" target="_blank">
                            <i class="fa fa-comments"></i> Claude
                        </a>
                        <a class="dropdown-item" href="https://gemini.google.com" target="_blank">
                            <i class="fa fa-diamond"></i> Gemini
                        </a>
                        <a class="dropdown-item" href="https://copilot.microsoft.com" target="_blank">
                            <i class="fa fa-code"></i> Copilot
                        </a>
                    </div>
                </li>
                
                <!-- Segundo Dropdown: Grok, Mistral, Cohere, ChatGPT, Qwen -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-microchip"></i> IA Grupo 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown2">
                        <a class="dropdown-item" href="https://enlaceallm.com/grok" target="_blank">
                            <i class="fa fa-bolt"></i> Grok
                        </a>
                        <a class="dropdown-item" href="https://enlaceallm.com/mistral" target="_blank">
                            <i class="fa fa-wind"></i> Mistral
                        </a>
                        <a class="dropdown-item" href="https://enlaceallm.com/cohere" target="_blank">
                            <i class="fa fa-link"></i> Cohere
                        </a>
                        <a class="dropdown-item" href="https://chat.openai.com" target="_blank">
                            <i class="fa fa-comment"></i> ChatGPT
                        </a>
                        <a class="dropdown-item" href="https://enlaceallm.com/qwen" target="_blank">
                            <i class="fa fa-star"></i> Qwen
                        </a>
                    </div>
                </li>
            </ul>
            
            <!-- Información del sistema en la derecha -->
            <span class="navbar-text">
                <i class="fa fa-info-circle"></i> <?php echo $claudeVersion; ?> | PHP <?php echo $phpVersion; ?>
            </span>
        </div>
    </nav>
    <?php
}

// Función para el footer
function mostrarFooter() {
    ?>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">
                <i class="fa fa-code"></i> <strong>Ejercicio 3</strong> - Navegación con Bootstrap y PHP
            </p>
            <p class="mb-0 text-muted">
                <small>Desarrollado con Bootstrap 4.6.x, Font Awesome y PHP moderno. Una demostración de componentes de navegación con menús dropdown para acceder rápidamente a las principales herramientas de inteligencia artificial.</small>
            </p>
        </div>
    </footer>
    
    <!-- jQuery y Bootstrap JS desde jsDelivr -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
    <?php
}

// Llamar al header
mostrarHeader();
?>

<!-- Contenido principal de la página -->
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">
            <i class="fa fa-rocket"></i> Bienvenido al Ejercicio 3
        </h1>
        <p class="lead">Esta es una página de demostración desarrollada con PHP y Bootstrap 4.6.x</p>
        <hr class="my-4">
        <p>Utiliza la barra de navegación superior para acceder a Google o explorar diferentes herramientas de inteligencia artificial organizadas en dos grupos.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="https://getbootstrap.com/docs/4.6/getting-started/introduction/" target="_blank" role="button">
                <i class="fa fa-book"></i> Documentación Bootstrap
            </a>
        </p>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-cogs"></i> Tecnologías</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i> PHP 7.x+</li>
                        <li><i class="fa fa-check text-success"></i> Bootstrap 4.6.x</li>
                        <li><i class="fa fa-check text-success"></i> Font Awesome</li>
                        <li><i class="fa fa-check text-success"></i> jsDelivr CDN</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-list"></i> Características</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-star text-warning"></i> Navegación responsive</li>
                        <li><i class="fa fa-star text-warning"></i> Menús dropdown</li>
                        <li><i class="fa fa-star text-warning"></i> Un solo archivo</li>
                        <li><i class="fa fa-star text-warning"></i> Funciones PHP</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-users"></i> IAs Incluidas</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-circle-o text-info"></i> Claude & Gemini</li>
                        <li><i class="fa fa-circle-o text-info"></i> Copilot & Grok</li>
                        <li><i class="fa fa-circle-o text-info"></i> Mistral & Cohere</li>
                        <li><i class="fa fa-circle-o text-info"></i> ChatGPT & Qwen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Llamar al footer
mostrarFooter();
?>
