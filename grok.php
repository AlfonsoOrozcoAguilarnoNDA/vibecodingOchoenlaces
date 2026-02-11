<?php
function printHeader() {
    echo '<!DOCTYPE html>';
    echo '<html lang="es">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Ejercicio 3</title>';
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">';
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">';
    echo '</head>';
    echo '<body>';
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
    echo '<a class="navbar-brand" href="#">Grok 4 - PHP v' . phpversion() . '</a>';
    echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
    echo '<span class="navbar-toggler-icon"></span>';
    echo '</button>';
    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
    echo '<ul class="navbar-nav mr-auto">';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="https://www.google.com" target="_blank">Google</a>';
    echo '</li>';
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle" href="#" id="dropdownIA1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
    echo 'IA Populares 1';
    echo '</a>';
    echo '<div class="dropdown-menu" aria-labelledby="dropdownIA1">';
    echo '<a class="dropdown-item" href="https://claude.ai/" target="_blank">Claude</a>';
    echo '<a class="dropdown-item" href="https://gemini.google.com/" target="_blank">Gemini</a>';
    echo '<a class="dropdown-item" href="https://copilot.microsoft.com/" target="_blank">Copilot</a>';
    echo '</div>';
    echo '</li>';
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle" href="#" id="dropdownIA2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
    echo 'IA Populares 2';
    echo '</a>';
    echo '<div class="dropdown-menu" aria-labelledby="dropdownIA2">';
    echo '<a class="dropdown-item" href="https://grok.x.ai/" target="_blank">Grok</a>';
    echo '<a class="dropdown-item" href="https://chat.mistral.ai/" target="_blank">Mistral</a>';
    echo '<a class="dropdown-item" href="https://cohere.com/chat" target="_blank">Cohere</a>';
    echo '<a class="dropdown-item" href="https://chat.openai.com/" target="_blank">ChatGPT</a>';
    echo '<a class="dropdown-item" href="https://qwenlm.github.io/" target="_blank">Qwen</a>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '</nav>';
}

function printFooter() {
    echo '<footer class="bg-light text-center text-lg-start mt-5 py-3">';
    echo '<div class="text-center">';
    echo 'Ejercicio 3 - Creado en febrero 2026 con cariño desde México City';
    echo '</div>';
    echo '</footer>';
    echo '<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>';
    echo '</body>';
    echo '</html>';
}

printHeader();

echo '<div class="container mt-4">';
echo '<h1 class="mb-4">Ejercicio 3 - Menú de Inteligencias Artificiales</h1>';
echo '<p class="lead">Bienvenido. Usa la barra superior para explorar las principales IA disponibles en 2026.</p>';
echo '<p>Actualmente estás interactuando con: <strong>Grok 4</strong> (versión PHP: ' . phpversion() . ')</p>';
echo '</div>';

printFooter();
?>
