<?php
// Función para generar el header con metadatos, CDN y barra de navegación
function header_section() {
$php_version = phpversion();
echo '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio 3 - Menú de LLMs</title>
<!-- Bootstrap 4.6.2 CSS desde jsDelivr (CDN funcional en México) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- Font Awesome 6.5.2 desde jsDelivr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
<style>
body { padding-top: 70px; background-color: #f8f9fa; }
.navbar-dark { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.footer { background-color: #343a40; color: rgba(255,255,255,0.8); padding: 1.5rem 0; margin-top: 3rem; }
.ai-badge { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 600; }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#">
<i class="fas fa-brain me-2"></i>Ejercicio 3
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="https://www.google.com" target="_blank" rel="noopener">
<i class="fab fa-google me-1"></i>Google
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="grupo1Dropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-robot me-1"></i>Grupo 1
</a>
<div class="dropdown-menu" aria-labelledby="grupo1Dropdown">
<a class="dropdown-item" href="https://enlaceallm.com?llm=claude" target="_blank" rel="noopener">
<i class="fas fa-comment-alt me-2"></i>Claude
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=gemini" target="_blank" rel="noopener">
<i class="fas fa-gem me-2"></i>Gemini
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=copilot" target="_blank" rel="noopener">
<i class="fas fa-code me-2"></i>Copilot
</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="grupo2Dropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-microchip me-1"></i>Grupo 2
</a>
<div class="dropdown-menu" aria-labelledby="grupo2Dropdown">
<a class="dropdown-item" href="https://enlaceallm.com?llm=grok" target="_blank" rel="noopener">
<i class="fas fa-bolt me-2"></i>Grok
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=mistral" target="_blank" rel="noopener">
<i class="fas fa-fire me-2"></i>Mistral
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=cohere" target="_blank" rel="noopener">
<i class="fas fa-cloud me-2"></i>Cohere
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=chatgpt" target="_blank" rel="noopener">
<i class="fas fa-comments me-2"></i>ChatGPT
</a>
</div>
</li>
</ul>
<span class="navbar-text">
<span class="ai-badge text-white">
<i class="fas fa-robot me-1"></i>Qwen3 | PHP: ' . htmlspecialchars($php_version) . '
</span>
</span>
</div>
</div>
</nav>';
}

// Función para generar el footer con información requerida
function footer_section() {
echo '<footer class="footer mt-auto">
<div class="container text-center">
<div class="mb-2">
<span class="badge badge-secondary py-2 px-3">
<i class="fas fa-code me-1"></i>Ejercicio 3
</span>
</div>
<p class="mb-1">Desarrollado con ❤️ usando PHP puro y Bootstrap 4.6.2</p>
<p class="mb-0 small">Optimizado para funcionar en entornos con restricciones de CDN en México • ' . date("Y") . '</p>
<div class="mt-2">
<span class="badge badge-dark">Qwen3</span>
<span class="badge badge-info">PHP ' . htmlspecialchars(phpversion()) . '</span>
<span class="badge badge-success">Bootstrap 4.6.2</span>
</div>
</div>
</footer>

<!-- Bootstrap JS Bundle con Popper desde jsDelivr (requerido para dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';
}
?>

<?php header_section(); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8">
<div class="card border-0 shadow-sm mb-4">
<div class="card-body p-4">
<h1 class="text-center mb-4">
<i class="fas fa-globe-americas text-primary me-2"></i>Menú de Inteligencias Artificiales
</h1>
<div class="alert alert-info text-center">
<i class="fas fa-info-circle me-2"></i>
Esta página demuestra la integración de componentes Bootstrap 4 con funciones PHP estructuradas.
Todos los enlaces de LLMs usan el dominio genérico solicitado.
</div>

12345678910111213141516171819202122232425262728293031323334353637383940414243444546474849505152
</div>

<?php footer_section(); ?>
retroalimentacion. maravilloso pero se vio muy raro en un inicio cuando hciue un cambio. seriaideal si en ocasionespeoximas pusieras un headers borrando cache.

Thinking completed
<?php
// Headers anti-caché para desarrollo - evitar problemas al actualizar el archivo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

// Función para generar el header con metadatos, CDN y barra de navegación
function header_section() {
$php_version = phpversion();
echo '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio 3 - Menú de LLMs</title>
<!-- Bootstrap 4.6.2 CSS desde jsDelivr (CDN funcional en México) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- Font Awesome 6.5.2 desde jsDelivr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
<style>
body { padding-top: 70px; background-color: #f8f9fa; }
.navbar-dark { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.footer { background-color: #343a40; color: rgba(255,255,255,0.8); padding: 1.5rem 0; margin-top: 3rem; }
.ai-badge { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 600; }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#">
<i class="fas fa-brain me-2"></i>Ejercicio 3
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="https://www.google.com" target="_blank" rel="noopener">
<i class="fab fa-google me-1"></i>Google
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="grupo1Dropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-robot me-1"></i>Grupo 1
</a>
<div class="dropdown-menu" aria-labelledby="grupo1Dropdown">
<a class="dropdown-item" href="https://enlaceallm.com?llm=claude" target="_blank" rel="noopener">
<i class="fas fa-comment-alt me-2"></i>Claude
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=gemini" target="_blank" rel="noopener">
<i class="fas fa-gem me-2"></i>Gemini
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=copilot" target="_blank" rel="noopener">
<i class="fas fa-code me-2"></i>Copilot
</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="grupo2Dropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-microchip me-1"></i>Grupo 2
</a>
<div class="dropdown-menu" aria-labelledby="grupo2Dropdown">
<a class="dropdown-item" href="https://enlaceallm.com?llm=grok" target="_blank" rel="noopener">
<i class="fas fa-bolt me-2"></i>Grok
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=mistral" target="_blank" rel="noopener">
<i class="fas fa-fire me-2"></i>Mistral
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=cohere" target="_blank" rel="noopener">
<i class="fas fa-cloud me-2"></i>Cohere
</a>
<a class="dropdown-item" href="https://enlaceallm.com?llm=chatgpt" target="_blank" rel="noopener">
<i class="fas fa-comments me-2"></i>ChatGPT
</a>
</div>
</li>
</ul>
<span class="navbar-text">
<span class="ai-badge text-white">
<i class="fas fa-robot me-1"></i>Qwen3 | PHP: ' . htmlspecialchars($php_version) . '
</span>
</span>
</div>
</div>
</nav>';
}

// Función para generar el footer con información requerida
function footer_section() {
echo '<footer class="footer mt-auto">
<div class="container text-center">
<div class="mb-2">
<span class="badge badge-secondary py-2 px-3">
<i class="fas fa-code me-1"></i>Ejercicio 3
</span>
</div>
<p class="mb-1">Desarrollado con ❤️ usando PHP puro y Bootstrap 4.6.2</p>
<p class="mb-0 small">Optimizado para funcionar en entornos con restricciones de CDN en México • ' . date("Y") . '</p>
<div class="mt-2">
<span class="badge badge-dark">Qwen3</span>
<span class="badge badge-info">PHP ' . htmlspecialchars(phpversion()) . '</span>
<span class="badge badge-success">Bootstrap 4.6.2</span>
</div>
</div>
</footer>

<!-- Bootstrap JS Bundle con Popper desde jsDelivr (requerido para dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';
}
?>

<?php header_section(); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8">
<div class="card border-0 shadow-sm mb-4">
<div class="card-body p-4">
<h1 class="text-center mb-4">
<i class="fas fa-globe-americas text-primary me-2"></i>Menú de Inteligencias Artificiales
</h1>
<div class="alert alert-info text-center">
<i class="fas fa-info-circle me-2"></i>
Esta página demuestra la integración de componentes Bootstrap 4 con funciones PHP estructuradas.
Todos los enlaces de LLMs usan el dominio genérico solicitado.
</div>

12345678910111213141516171819202122232425262728293031323334353637383940414243444546474849505152
</div>

<?php footer_section(); ?>
