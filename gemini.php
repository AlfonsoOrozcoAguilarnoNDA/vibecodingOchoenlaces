<?php
/**
 * ============================================================================
 * PROYECTO: Arena de IA - Ejercicio 3 (Versión Extendida)
 * ARCHIVO: arena_ia_ejercicio3_v2.php
 * DESCRIPCIÓN: Interfaz Bootstrap 4.6, un solo archivo, funciones PHP.
 * INCLUYE: Enlace a Qwen y compatibilidad PHP 7.x/8.x.
 * AUTOR: Gemini 1.5 Flash
 * ============================================================================
 */

// 1. Configuración de cabeceras (Higiene técnica)
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=UTF-8");

/**
 * Header y Navbar: Encapsula el diseño superior
 */
function render_header($ia_name, $ia_version) {
    $php_version = phpversion();
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Arena de IA - <?php echo $ia_name; ?></title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
        
        <style>
            body { padding-top: 70px; padding-bottom: 70px; background-color: #f4f7f6; }
            .navbar-info { font-size: 0.8rem; color: #00ffcc; margin-left: 15px; border-left: 1px solid #555; padding-left: 15px; }
            .footer { position: fixed; bottom: 0; width: 100%; height: 60px; line-height: 60px; background-color: #212529; color: #adb5bd; }
            .card-metro-style { border: none; border-radius: 0; border-left: 5px solid #007bff; }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold" href="#">
                <i class="fas fa-terminal text-warning"></i> ARENA <span class="text-primary">IA</span>
            </a>
            <span class="navbar-info d-none d-lg-inline">
                SISTEMA: <?php echo $ia_name; ?> v<?php echo $ia_version; ?> | PHP: <?php echo $php_version; ?>
            </span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarArena">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarArena">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.google.com" target="_blank"><i class="fab fa-google"></i> Google</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="drop1" data-toggle="dropdown">Principales</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="https://claude.ai" target="_blank">Claude</a>
                            <a class="dropdown-item" href="https://gemini.google.com" target="_blank">Gemini</a>
                            <a class="dropdown-item" href="https://enlaceallm.com/copilot" target="_blank">Copilot</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="drop2" data-toggle="dropdown">Alternativos</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="https://enlaceallm.com/grok" target="_blank">Grok</a>
                            <a class="dropdown-item" href="https://mistral.ai" target="_blank">Mistral</a>
                            <a class="dropdown-item" href="https://cohere.com" target="_blank">Cohere</a>
                            <a class="dropdown-item" href="https://chatgpt.com" target="_blank">ChatGPT</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item bg-light font-weight-bold" href="https://enlaceallm.com/qwen" target="_blank text-primary">
                                <i class="fas fa-rocket mr-1"></i> Qwen (Alibaba)
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="btn btn-outline-danger btn-sm ml-lg-3" onclick="confirm('¿Salir de la arena?')">SALIR</button>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <?php
}

/**
 * Footer: Encapsula el cierre y scripts
 */
function render_footer($extra_text) {
    ?>
    </div> 
    <footer class="footer">
        <div class="container text-center">
            <span><strong>Ejercicio 3</strong> | <?php echo $extra_text; ?></span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
}

// --- ORQUESTACIÓN DEL ARCHIVO ---

render_header("Gemini", "1.5 Flash (Web)");

?>
<div class="card card-metro-style shadow-sm">
    <div class="card-body">
        <h3 class="text-secondary"><i class="fas fa-microchip"></i> Arena de Inteligencias Artificiales</h3>
        <p class="lead">Ejercicio de interoperabilidad y resiliencia técnica.</p>
        <hr>
        <p>Se ha incorporado el enlace solicitado a <strong>Qwen</strong> en el menú de Alternativos.</p>
        <div class="p-3 mb-2 bg-dark text-white rounded">
            <code>Código procedural optimizado para cPanel / Apache / PHP 7+</code>
        </div>
    </div>
</div>
<?php

render_footer("Vibe Coding México: Programación de trinchera que sí funciona.");
?>
