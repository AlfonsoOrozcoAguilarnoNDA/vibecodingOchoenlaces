# vibecodingOchoenlaces (Feb 2026)
### Comparativa de Vibe Coding Para tarea simple de Boostrap

Este es uno de los experimentos semanales que realizo en vibecodingmexico.com  

Este repositorio es el resultado de un experimento de vibecoding **Enfocado a empresas medianas LATAM 2026** realizado el 11 de febrero de 2026. La misión: crear un barra de navegación para incorporaren otros proyectos con enlaces a las LLM mas usadas.

## ⚖️ Sobre la Licencia
He elegido la **Licencia MIT** por su simplicidad. Es lo más cercano a una "Creative Commons" para código: haz lo que quieras con él, solo mantén el crédito del autor. 

* **¿Por qué no LGPL 2.1?** Aunque es una gran licencia para proteger mejoras (obligando a compartir los cambios del archivo), para este experimento buscaba la mínima fricción posible. La MIT es "Plug & Play", igual que la filosofía del proyecto.

## ✍️ Acerca del Autor
Este proyecto forma parte de una serie de artículos en **[vibecodingmexico.com](https://vibecodingmexico.com)**. Mi enfoque no es la programación de laboratorio, sino la **Programación Real**: aquella que sobrevive a servidores compartidos, bloqueos de oficina y conexiones de una sola rayita de señal.

Mi nombre es Alfonso Orozco Aguilar, soy mexicano, programo desde 1991 para comer, y no tengo cuenta de Linkedin para disminuir superficie de ataque. Llevo trabajando desde que tengo memoria como devops / programador senior, y en 2026 estoy por terminar la licenciatura de contaduria. En el sitio esta mi perfil de facebook.

[Perfil de Facebook de Alfonso Orozco Aguilar](https://www.facebook.com/alfonso.orozcoaguilar)

## 🛠️ ¿Por qué cPanel y PHP?
Elegimos **cPanel** porque es el estándar de la industria desde hace 25 años y el ambiente más fácil de replicar para cualquier profesional. 
* **Versión de PHP:** Asumimos un entorno moderno de **PHP 8.4**, pero por su naturaleza procedural, el código es confiable en cualquier hospedaje compartido con **PHP 7.x** o superior. Tu respaldo es como un "Tupperware" que puedes cambiar de refrigerador sin problemas.

---

## 📂 Guía de Archivos (Los Especímenes)

https://vibecodingmexico.com/vibecoding-ocho-enlaces-a-llm/

Ganador Cohere

| Candidato | Calificación | Perfil Profesional | Factor de "Activo Fijo" |
| :--- | :---: | :--- | :--- |
| **🏆 Cohere** | **9.6** | Arquitecto Visual | **Premium:** El mejor diseño "listo para usar". |
| **💎 Qwen3** | **9.5** | El Aliado Leal | **Soberano:** El único que es tuyo y corre localmente. |
| **🛡️ Gemini** | **9.5** | Ingeniero Senior | **Estructural:** El más riguroso en reglas técnicas. |
| **💼 Claude** | **9.5** | Consultor Senior | **Elegancia:** Calidad indiscutible de presentación. |
| **🚀 Grok** | **9.4** | Analista Estratega | **Proactivo:** Visión de futuro y datos extra. |
| **🎨 Mistral** | **9.2** | Vanguardista | **Estilo:** El poder de lo moderno (pese al error h1). |
| **📉 Copilot** | **6.0** | Becario Flojo | **Obsolescencia:** Dependencia total y baja calidad. |

Muy simple. El nombre de la Inteligencia Artificial en turno. De qwen hay dos versiones
* **`qwen.php`**: qwen 3 original
* **`qwengemini.php`**: qwen 3 modificado por gemini

---

## 🤖 El Prompt Original (La Prueba)
Para que el experimento sea replicable, este fue el comando enviado a todas las LLMs:

INICIA PROMPT

Queremos limitación técnica, debe ser con PHP 7.x en adelante, Bootstrap 4.6.x, Font Awesome, y queremos una página en Bootstrap
que sea en un solo archivo, pero con dos funciones de PHP: una para el header y otra para el footer. En el header vamos a llamar
a jsDelivr como CDN porque otros están bloqueados en México, y las llamadas de la barra de navegación. En el footer, debe decir
“Ejercicio 3” y el texto que tú quieras. Queremos que la parte superior incorpore en la barra de navegación un link a Google y
dos menús dropdown, con los links a las inteligencias artificiales más conocidas: Claude, Gemini y Copilot; y en el segundo
dropdown: Grok, Mistral, Cohere y ChatGPT. Sé que ChatGPT es más conocido, pero está así por limitación técnica. Por favor
pon en la barra de navegación superior qué inteligencia eres, qué versión, y la versión de PHP. Si no conoces el link
directo de las LLM, genera un https://enlaceallm.com, con target="_blank". Debe ser un solo archivo para alojar en
cPanel, no uses shorttags o <?=.

FIN PROMPT

La pregunta trampa va a ser:

INICIA PROMPT

Se me olvido pedirte que pongas enlace a la inteligencia artificial qwen vuelve a generar

FIN PROMPT

Esta pregunta solo la hare cuando ya haya guardado en archivo el resultado y comparemos a ver que pasó en lineas y funcionalidad.

---

## 🖼️ Evidencia Visual
Las imágenes de las interfaces generadas se encuentran en la carpeta del repositorio para su consulta. Verás la diferencia entre ellas

## 🚀 Requisitos Mínimos
1. Un dominio y hospedaje php 7.x Hospedaje compartido con PHP 7.x o superior y acceso a MySQL/MariaDB.
