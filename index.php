<?php
// index.php

// Definimos el título de la página
$title = "Bienvenido";


// Definimos el contenido de la página
ob_start(); // Inicia el almacenamiento en búfer de salida
?>

  <!-- SECCION INICIO -->
  <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="assets/edu.png" alt="image" width="150px">
            </div>
            <h1>Eduardo Aguiñaga Ramírez</h1>
            <h2>Desarrollador FrontEnd</h2>
            <div class="redes">
            <a href="https://www.facebook.com/eduardo.aguinaga.948" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/eduardo.armz" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/eduardo-agui%C3%B1aga-ramirez-66658621a/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                
            </div>
        </div>
    </section>
<?php
// Incluimos los archivos de sección
include 'sections/sobremi.html';
include 'sections/skills.html';
include 'sections/portfolio.html';
include 'sections/contacto.html';


$content = ob_get_clean(); // Obtiene el contenido del búfer y lo limpia

// Incluimos el archivo base
include 'includes/base.php';
?>


